<?php

namespace Napopravku\RtaApiClient\DTOs\Appointment\Result;

use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicShortResultDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Result\DoctorShortResultDTO;

class AppointmentResultDTO extends AbstractDTO
{
    public string $uuid;

    public ClinicShortResultDTO $clinic;

    public DoctorShortResultDTO $doctor;

    public ?string $misServiceId;

    public string $startTime;

    public string $endTime;

    public ?string $patientSurname;

    public ?string $patientFirstname;

    public ?string $patientFatherName;

    public ?string $patientGender;

    public ?string $patientPhone;

    public ?string $patientEmail;

    public ?string $patientBirthday;

    public ?string $comment;

    public ?string $source;

    public bool $isReceived;

    public bool $isCancelled;

    public ?string $createdAt;

    public ?string $updatedAt;
}
