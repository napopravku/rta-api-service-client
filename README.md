# rta-api-service-client
Клиент для НаПоправку RTA API.

### Установка
Рассмотрим установку и использование вне PHP проекта.\
Для работы необходимы PHP версии 8.1 или новее и Composer. Вы можете использовать Docker окружение.

Настройка контейнера:
```sh
#Сборка и запуск контейнера
docker compose up -d --build
```
```sh
#Подключение к контейнеру
docker compose exec php bash
```

Установите необходимые зависимости, выполнив команду: 
```sh
composer i
```

Теперь библиотека готова к использованию.

### Правила работы с сервисом

Сервис предназначен для передачи информации о врачах, клиниках, услугах и расписании, а также получении информации о записях.\
[Документация к API](https://documenter.getpostman.com/view/24227456/2s9Xy3rBGX)

| Данные  |      Частота передачи       |
|---------|:---------------------------:|
| Клиники |   Раз в 6 часов или чаще    |
| Врачи   |   Раз в 6 часов или чаще    |
| Услуги  | Раз в сутки до 19:00 по МСК |
| Слоты   |   Раз в 10 минут или чаще   |

Перед передачей актуальных слотов нужно обработать записи. Хорошая периодичность обработки - раз в 2 минуты.

Алгоритм:
1. Выполняется запрос `getAppointments` с параметром `is_received` равным `false`.
2. Для каждой записи выполняется запрос `receiveAppointment`, который помечает запись как обработанную на стороне МИС.

Если вы передаёте слот с `duration` отличным от `null`, при обработке произойдёт разделение на слоты заданной длительности.\
Пример:
```json
{
    "from": "16:00",
    "to": "17:00",
    "duration": 15
}
```
Результат:
```json
[
    {
        "from": "16:00",
        "to": "16:15"
    },
    {
        "from": "16:15",
        "to": "16:30"
    },
    {
        "from": "16:30",
        "to": "16:45"
    },
    {
        "from": "16:45",
        "to": "17:00"
    }
]
```

### Инициализация клиента
```php
<?php
//index.php
use Napopravku\RtaApiClient\RemoteRtaApiClient;

require 'vendor/autoload.php';

$client = new RemoteRtaApiClient(token: 'your_token');
```
### Обновление клиник
```php
/** @var ClinicListUpdateDTO $clinicListUpdateDto */
$clinicListUpdateDto = ClinicListUpdateFactory::fromArray([
    'clinics' => [
        [
            'mis_clinic_id' => 'a',
            'name'          => 'Клиника A',
            'comment'       => 'Клиника A',
        ],
        [
            'mis_clinic_id' => 'b',
            'name'          => 'Клиника B',
            'comment'       => 'Клиника B',
        ],
        [
            'mis_clinic_id' => 'c',
            'name'          => 'Клиника C',
            'comment'       => 'Клиника C',
        ],
    ],
]);

$result = $client->updateClinics($clinicListUpdateDto);
```
### Получение клиник
```php
/** @var ClinicListDTO $clinicListDto */
$clinicListDto = ClinicListFactory::fromArray([
    'with_doctors' => false,
]);

$clinicListDto->paging->perPage = PagingDTO::MAX_PER_PAGE;

$clinicListDto->sorting->sortBy = 'mis_clinic_id';
$clinicListDto->sorting->sortDir = SortingDTO::SORT_DIR_DESC;

$result = $client->getClinics($clinicListDto);
```
\
Для конкретного запроса фабрикой создаётся объект DTO, далее объект передаётся в соответствующий метод клиента.
Значения свойств DTO могут редактироваться после создания.\
Остальные запросы выполняются аналогичным образом.
