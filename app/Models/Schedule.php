<?php

namespace App\Models;

use App\Models\ScheduleUnavailability;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    protected $casts = [
        'date' => 'datetime',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function unavailabilities()
    {
        return $this->hasMany(ScheduleUnavailability::class);
    }
}
