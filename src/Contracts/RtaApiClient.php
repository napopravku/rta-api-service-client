<?php

namespace Napopravku\RtaApiClient\Contracts;

use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;
use Napopravku\RtaApiClient\DTOs\Slot\Request\SlotListDTO;
use Napopravku\RtaApiClient\DTOs\Clinic\Request\ClinicListDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Request\DoctorListDTO;
use Napopravku\RtaApiClient\DTOs\Slot\Result\SlotListResultDTO;
use Napopravku\RtaApiClient\DTOs\Slot\Request\SlotListUpdateDTO;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicListResultDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Result\DoctorListResultDTO;
use Napopravku\RtaApiClient\DTOs\Clinic\Request\ClinicListUpdateDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Request\DoctorListUpdateDTO;
use Napopravku\RtaApiClient\DTOs\Appointment\Request\AppointmentListDTO;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicListUpdateResultDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Result\DoctorListUpdateResultDTO;
use Napopravku\RtaApiClient\DTOs\Appointment\Request\AppointmentReceiveDTO;
use Napopravku\RtaApiClient\DTOs\ClinicService\Request\ClinicServiceListDTO;
use Napopravku\RtaApiClient\DTOs\Appointment\Result\AppointmentListResultDTO;
use Napopravku\RtaApiClient\DTOs\ClinicService\Result\ClinicServiceListResultDTO;
use Napopravku\RtaApiClient\DTOs\ClinicService\Request\ClinicServiceListUpdateDTO;
use Napopravku\RtaApiClient\DTOs\ClinicService\Result\ClinicServiceListUpdateResultDTO;

interface RtaApiClient
{
    public function getClinics(ClinicListDTO $dto): ClinicListResultDTO|AbstractDTO;

    public function updateClinics(ClinicListUpdateDTO $dto): ClinicListUpdateResultDTO|AbstractDTO;

    public function getDoctors(DoctorListDTO $dto): DoctorListResultDTO|AbstractDTO;

    public function updateDoctors(DoctorListUpdateDTO $dto): DoctorListUpdateResultDTO|AbstractDTO;

    public function getSlots(SlotListDTO $dto): SlotListResultDTO|AbstractDTO;

    public function updateSlots(SlotListUpdateDTO $dto): void;

    public function getClinicServices(ClinicServiceListDTO $dto): ClinicServiceListResultDTO|AbstractDTO;

    public function updateClinicServices(ClinicServiceListUpdateDTO $dto): ClinicServiceListUpdateResultDTO|AbstractDTO;

    public function getAppointments(AppointmentListDTO $dto): AppointmentListResultDTO|AbstractDTO;

    public function receiveAppointment(AppointmentReceiveDTO $dto): void;
}
