<?php

namespace App\Models;

use App\Enums\TripStatuses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TripStatus extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'trips_statuses';

    protected $fillable = [
        'student_id',
        'status',
    ];

    public static $statuses = [
        TripStatuses::GOOD_MORNING,
        TripStatuses::NEARBY,
        TripStatuses::TO_SCHOOL,
        TripStatuses::SCHOOL,
        TripStatuses::TO_HOME,
        TripStatuses::HOME,
    ];
}
