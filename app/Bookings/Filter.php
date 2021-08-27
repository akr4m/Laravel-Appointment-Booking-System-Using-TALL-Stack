<?php

namespace App\Bookings;

use Carbon\CarbonPeriod;
use App\Bookings\TimeSlotGenerator;

interface Filter
{
    public function apply(TimeSlotGenerator $generator, CarbonPeriod $interval);
}
