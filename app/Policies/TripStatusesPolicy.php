<?php

namespace App\Policies;

use App\Models\Student;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TripStatusesPolicy
{
    use HandlesAuthorization;
    
    const GET = 'get';

    public function get(User $user, Student $student)
    {
        return $user->parent->id == $student->parent_id;
    }
}
