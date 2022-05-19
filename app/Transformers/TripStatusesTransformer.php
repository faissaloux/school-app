<?php

namespace App\Transformers;

use App\Models\TripStatus;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class TripStatusesTransformer extends TransformerAbstract
{
    public function transform(TripStatus $tripStatus)
    {
        $timeStamp = Carbon::parse($tripStatus->created_at);

        return [
            'id' => $tripStatus->id,
            'status' => $tripStatus->status,
            'date' => $timeStamp->toDateString(),
            'time' => $timeStamp->toTimeString(),
        ];
    }
}
