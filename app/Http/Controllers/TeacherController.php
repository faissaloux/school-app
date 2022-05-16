<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Jobs\CreateTeacher;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teachers.index');
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(StoreTeacherRequest $request)
    {
        $this->dispatchSync(CreateTeacher::fromRequest($request));

        $this->success('teacher.created');

        return redirect()->route('teachers.index');
    }
}
