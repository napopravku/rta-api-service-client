<?php

namespace Napopravku\RtaApiClient;

use JsonException;
use GuzzleHttp\Exception\GuzzleException;
use Napopravku\RtaApiClient\Remote\HttpClient;
use Napopravku\RtaApiClient\Contracts\RtaApiClient;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;
use Napopravku\RtaApiClient\DTOs\Slot\Request\SlotListDTO;
use Napopravku\RtaApiClient\Exceptions\RtaApiAuthException;
use Napopravku\RtaApiClient\Exceptions\RtaApiRemoteException;
use Napopravku\RtaApiClient\DTOs\Clinic\Request\ClinicListDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Request\DoctorListDTO;
use Napopravku\RtaApiClient\DTOs\Slot\Result\SlotListResultDTO;
use Napopravku\RtaApiClient\Exceptions\RtaApiNotFoundException;
use Napopravku\RtaApiClient\DTOs\Slot\Request\SlotListUpdateDTO;
use Napopravku\RtaApiClient\Exceptions\RtaApiValidationException;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicListResultDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Result\DoctorListResultDTO;
use Napopravku\RtaApiClient\DTOs\Clinic\Request\ClinicListUpdateDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Request\DoctorListUpdateDTO;
use Napopravku\RtaApiClient\DTOs\Appointment\Request\AppointmentListDTO;
use Napopravku\RtaApiClient\Factories\Slot\Result\SlotListResultFactory;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicListUpdateResultDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Result\DoctorListUpdateResultDTO;
use Napopravku\RtaApiClient\Exceptions\RtaApiRemoteInvalidMethodException;
use Napopravku\RtaApiClient\DTOs\Appointment\Request\AppointmentReceiveDTO;
use Napopravku\RtaApiClient\DTOs\ClinicService\Request\ClinicServiceListDTO;
use Napopravku\RtaApiClient\Factories\Clinic\Result\ClinicListResultFactory;
use Napopravku\RtaApiClient\Factories\Doctor\Result\DoctorListResultFactory;
use Napopravku\RtaApiClient\DTOs\Appointment\Result\AppointmentListResultDTO;
use Napopravku\RtaApiClient\DTOs\ClinicService\Result\ClinicServiceListResultDTO;
use Napopravku\RtaApiClient\DTOs\ClinicService\Request\ClinicServiceListUpdateDTO;
use Napopravku\RtaApiClient\Factories\Clinic\Result\ClinicListUpdateResultFactory;
use Napopravku\RtaApiClient\Factories\Doctor\Result\DoctorListUpdateResultFactory;
use Napopravku\RtaApiClient\Factories\Appointment\Result\AppointmentListResultFactory;
use Napopravku\RtaApiClient\DTOs\ClinicService\Result\ClinicServiceListUpdateResultDTO;
use Napopravku\RtaApiClient\Factories\ClinicService\Result\ClinicServiceListResultFactory;
use Napopravku\RtaApiClient\Factories\ClinicService\Result\ClinicServiceListUpdateResultFactory;

class RemoteRtaApiClient implements RtaApiClient
{
    private const GET_CLINICS = 'clinics';

    private const POST_CLINICS_UPDATE = 'clinics';

    private const GET_DOCTORS = 'doctors';

    private const POST_DOCTORS_UPDATE = 'doctors';

    private const GET_SLOTS = 'slots';

    private const POST_SLOTS_UPDATE = 'slots';

    private const GET_CLINIC_SERVICES = 'clinics/services';

    private const POST_CLINIC_SERVICES_UPDATE = 'clinics/services';

    private const GET_APPOINTMENTS = 'appointments';

    private const POST_RECEIVE_APPOINTMENT = 'appointments/set-received';

    protected HttpClient $httpClient;

    public function __construct(
        string $baseUri = HttpClient::HOST,
        string $token = '',
        ?callable $logRequestMiddleware = null,
        ?callable $loggerMiddleware = null
    ) {
        $this->httpClient = new HttpClient($baseUri, $token, $logRequestMiddleware, $loggerMiddleware);
    }

    /**
     * @throws GuzzleException
     * @throws RtaApiAuthException
     * @throws RtaApiNotFoundException
     * @throws RtaApiRemoteException
     * @throws RtaApiRemoteInvalidMethodException
     * @throws RtaApiValidationException
     * @throws JsonException
     */
    public function getClinics(ClinicListDTO $dto): ClinicListResultDTO|AbstractDTO
    {
        $result = $this->httpClient->requestGet(self::GET_CLINICS, $dto->toArray());

        return ClinicListResultFactory::fromArray($result);
    }

    /**
     * @throws GuzzleException
     * @throws RtaApiAuthException
     * @throws RtaApiNotFoundException
     * @throws RtaApiRemoteException
     * @throws RtaApiRemoteInvalidMethodException
     * @throws RtaApiValidationException
     * @throws JsonException
     */
    public function updateClinics(ClinicListUpdateDTO $dto): ClinicListUpdateResultDTO|AbstractDTO
    {
        $result = $this->httpClient->requestPost(self::POST_CLINICS_UPDATE, $dto->toArray());

        return ClinicListUpdateResultFactory::fromArray($result);
    }

    /**
     * @throws GuzzleException
     * @throws RtaApiAuthException
     * @throws RtaApiNotFoundException
     * @throws RtaApiRemoteException
     * @throws RtaApiRemoteInvalidMethodException
     * @throws RtaApiValidationException
     * @throws JsonException
     */
    public function getDoctors(DoctorListDTO $dto): DoctorListResultDTO|AbstractDTO
    {
        $result = $this->httpClient->requestGet(self::GET_DOCTORS, $dto->toArray());

        return DoctorListResultFactory::fromArray($result);
    }

    /**
     * @throws GuzzleException
     * @throws RtaApiAuthException
     * @throws RtaApiNotFoundException
     * @throws RtaApiRemoteException
     * @throws RtaApiRemoteInvalidMethodException
     * @throws RtaApiValidationException
     * @throws JsonException
     */
    public function updateDoctors(DoctorListUpdateDTO $dto): DoctorListUpdateResultDTO|AbstractDTO
    {
        $result = $this->httpClient->requestPost(self::POST_DOCTORS_UPDATE, $dto->toArray());

        return DoctorListUpdateResultFactory::fromArray($result);
    }

    /**
     * @throws GuzzleException
     * @throws RtaApiAuthException
     * @throws RtaApiNotFoundException
     * @throws RtaApiRemoteException
     * @throws RtaApiRemoteInvalidMethodException
     * @throws RtaApiValidationException
     * @throws JsonException
     */
    public function getSlots(SlotListDTO $dto): SlotListResultDTO|AbstractDTO
    {
        $result = $this->httpClient->requestGet(self::GET_SLOTS, $dto->toArray());

        return SlotListResultFactory::fromArray($result);
    }

    /**
     * @throws GuzzleException
     * @throws RtaApiAuthException
     * @throws RtaApiNotFoundException
     * @throws RtaApiRemoteException
     * @throws RtaApiRemoteInvalidMethodException
     * @throws RtaApiValidationException
     * @throws JsonException
     */
    public function updateSlots(SlotListUpdateDTO $dto): void
    {
        $this->httpClient->requestPost(self::POST_SLOTS_UPDATE, $dto->toArray());
    }

    /**
     * @throws GuzzleException
     * @throws RtaApiAuthException
     * @throws RtaApiNotFoundException
     * @throws RtaApiRemoteException
     * @throws RtaApiRemoteInvalidMethodException
     * @throws RtaApiValidationException
     * @throws JsonException
     */
    public function getClinicServices(ClinicServiceListDTO $dto): ClinicServiceListResultDTO|AbstractDTO
    {
        $result = $this->httpClient->requestGet(self::GET_CLINIC_SERVICES, $dto->toArray());

        return ClinicServiceListResultFactory::fromArray($result);
    }

    /**
     * @throws GuzzleException
     * @throws RtaApiAuthException
     * @throws RtaApiNotFoundException
     * @throws RtaApiRemoteException
     * @throws RtaApiRemoteInvalidMethodException
     * @throws RtaApiValidationException
     * @throws JsonException
     */
    public function updateClinicServices(ClinicServiceListUpdateDTO $dto): ClinicServiceListUpdateResultDTO|AbstractDTO
    {
        $result = $this->httpClient->requestPost(self::POST_CLINIC_SERVICES_UPDATE, $dto->toArray());

        return ClinicServiceListUpdateResultFactory::fromArray($result);
    }

    /**
     * @throws GuzzleException
     * @throws RtaApiAuthException
     * @throws RtaApiNotFoundException
     * @throws RtaApiRemoteException
     * @throws RtaApiRemoteInvalidMethodException
     * @throws RtaApiValidationException
     * @throws JsonException
     */
    public function getAppointments(AppointmentListDTO $dto): AppointmentListResultDTO|AbstractDTO
    {
        $result = $this->httpClient->requestGet(self::GET_APPOINTMENTS, $dto->toArray());

        return AppointmentListResultFactory::fromArray($result);
    }

    /**
     * @throws GuzzleException
     * @throws RtaApiAuthException
     * @throws RtaApiNotFoundException
     * @throws RtaApiRemoteException
     * @throws RtaApiRemoteInvalidMethodException
     * @throws RtaApiValidationException
     * @throws JsonException
     */
    public function receiveAppointment(AppointmentReceiveDTO $dto): void
    {
        $this->httpClient->requestPost(self::POST_RECEIVE_APPOINTMENT, $dto->toArray());
    }
}
