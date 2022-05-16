<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Jobs\CreateStudent;
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
}
