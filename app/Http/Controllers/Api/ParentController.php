<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Transformers\ChildrenTransformer;
use App\Transformers\TripStatusesTransformer;

class ParentController extends Controller
{
    public function getChildren()
    {
        $authParent = auth()->user()->parent;
        $data = transformData($authParent->children, new ChildrenTransformer());

        return response()->data($data);
    }

    public function getStatuses(Student $student)
    {
        $data = transformData($student->tripsStatuses, new TripStatusesTransformer());

        return response()->data($data);
    }
}
