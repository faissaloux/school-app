<?php

namespace App\Observers;

use App\Models\Teacher;

class TeacherObserver
{
    public function deleted(Teacher $teacher)
    {
        $teacher->user->delete();
        $teacher->buses()->update(['teacher_id' => null]);
    }
}
