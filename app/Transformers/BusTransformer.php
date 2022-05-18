<?php

namespace App\Transformers;

use App\Models\Bus;
use League\Fractal\TransformerAbstract;

class BusTransformer extends TransformerAbstract
{
    public function transform(Bus $bus)
    {
        return [
            'id' => $bus->id,
            'students_count' => $bus->students->count(),
        ];
    }
}
