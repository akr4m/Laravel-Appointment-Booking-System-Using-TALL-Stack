<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Employee;
use App\Models\Schedule;
use Carbon\CarbonInterval;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Bookings\TimeSlotGenerator;
use App\Bookings\Filters\AppointmentFilter;
use App\Bookings\Filters\UnavailabilityFilter;
use App\Bookings\Filters\SlotsPassedTodayFilter;

class BookingController extends Controller
{
    public function __invoke()
    {
        $schedule = Schedule::find(2); // 30th
        $service = Service::find(1); // 1 hour

        $employee = Employee::find(1); // akram

        $slots = $employee->availableTimeSlots($schedule, $service);

        return view('bookings.create', [
            'slots' => $slots
        ]);
    }
}