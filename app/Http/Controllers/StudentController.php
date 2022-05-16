<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Parents;

class StudentController extends Controller
{
    public function create()
    {
        $parents = Parents::get();
        $buses = Bus::get();

        return view('students.create', compact('parents', 'buses'));
    }
}
