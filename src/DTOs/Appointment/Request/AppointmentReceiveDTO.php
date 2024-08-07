<?php

namespace Napopravku\RtaApiClient\DTOs\Appointment\Request;

use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class AppointmentReceiveDTO extends AbstractDTO
{
    public ?string $appointmentUuid = null;

    public ?string $message = null;

    public ?bool $success = null;
}
