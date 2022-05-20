<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Jobs\CreateStudent;
use App\Jobs\DeleteStudent;
use App\Jobs\UpdateStudent;
use App\Models\Bus;
use App\Models\Parents;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        $parents = Parents::get();
        $buses = Bus::get();

        return view('students.create', compact('parents', 'buses'));
    }

    public function store(StoreStudentRequest $request)
    {
        $this->dispatchSync(CreateStudent::fromRequest($request));

        $this->success('student.created');

        return redirect()->route('students.index');
    }

    public function edit(Student $student)
    {
        $parents = Parents::get();
        $buses = Bus::get();

        return view('students.edit', compact('student', 'parents', 'buses'));
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $this->dispatchSync(UpdateStudent::fromRequest($student, $request));

        $this->success('student.updated');

        return redirect()->route('students.index');
    }

    public function delete(Student $student)
    {
        $this->dispatchSync(new DeleteStudent($student));

        $this->success('student.deleted');

        return redirect()->route('students.index');
    }
}
