<?php

namespace App\Observers;

use App\Models\Parents;

class ParentObserver
{
    public function deleted(Parents $parent)
    {
        $parent->user->delete();
        $parent->children()->delete();
    }
}
