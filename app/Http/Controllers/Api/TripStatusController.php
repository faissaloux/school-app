<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreTripStatusRequest;
use App\Models\Bus;
use App\Models\TripStatus;

class TripStatusController extends Controller
{
    public function start(Bus $bus) {
        $bus->students->each(function($student) {
            $student->tripsStatuses()->create([
                'status' => head(TripStatus::$statuses),
            ]);
        });

        return response()->success('trip_status.started');
    }

    public function store(StoreTripStatusRequest $request)
    {
        TripStatus::create($request->validated());

        return response()->success('trip_status.created');
    }

    public function end(Bus $bus) {
        $bus->students->each(function($student) {
            $student->tripsStatuses()->create([
                'status' => end(TripStatus::$statuses),
            ]);
        });

        return response()->success('trip_status.finished');
    }
}
