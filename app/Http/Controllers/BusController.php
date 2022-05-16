<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

class BusController extends Controller
{
    public function create()
    {
        $teachers = Teacher::get();

        return view('buses.create', compact('teachers'));
    }
}
