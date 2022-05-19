<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Jobs\CreateTeacher;
use App\Jobs\DeleteTeacher;
use App\Jobs\UpdateTeacher;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::get();

        return view('teachers.index', compact('teachers'));
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

    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        $this->dispatchSync(UpdateTeacher::fromRequest($teacher, $request));

        $this->success('teacher.updated');

        return redirect()->route('teachers.index');
    }

    public function delete(Teacher $teacher)
    {
        $this->dispatchSync(new DeleteTeacher($teacher));

        $this->success('teacher.deleted');

        return redirect()->route('teachers.index');
    }
}
