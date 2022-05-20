<?php

namespace App\Observers;

use App\Models\Student;

class StudentObserver
{
    public function deleted(Student $student)
    {
        $student->tripsStatuses()->delete();
        if ($student->parent->children->isEmpty() ) {
            $student->parent()->delete();
            $student->parent->user->delete();
        }
    }
}
