<?php

namespace App\Http\Controllers;

class TeacherController extends Controller
{
    public function create()
    {
        return view('teachers.create');
    }
}
