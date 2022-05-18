<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use App\Transformers\BusStudentTransformer;
use App\Transformers\BusTransformer;

class TeacherController extends Controller
{
    public function getBuses()
    {
        $authTeacher = auth()->user()->teacher;
        $data = transformData($authTeacher->buses, new BusTransformer());

        return response()->data($data);
    }

    public function getBusStudents(Bus $bus)
    {
        $busStudents = $bus->students;
        $data = transformData($busStudents, new BusStudentTransformer());

        return response()->data($data);
    }
}
