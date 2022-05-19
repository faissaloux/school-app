<?php

namespace App\Transformers;

use App\Models\Student;
use League\Fractal\TransformerAbstract;

class ChildrenTransformer extends TransformerAbstract
{
    public function transform(Student $student)
    {
        return [
            'id' => $student->id,
            'name' => $student->name,
        ];
    }
}
