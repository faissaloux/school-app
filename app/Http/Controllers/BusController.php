<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusRequest;
use App\Http\Requests\UpdateBusRequest;
use App\Jobs\CreateBus;
use App\Jobs\UpdateBus;
use App\Models\Bus;
use App\Models\Teacher;

class BusController extends Controller
{
    public function index()
    {
        $buses = Bus::get();

        return view('buses.index', compact('buses'));
    }

    public function create()
    {
        $teachers = Teacher::get();

        return view('buses.create', compact('teachers'));
    }

    public function store(StoreBusRequest $request)
    {
        $this->dispatchSync(CreateBus::fromRequest($request));

        $this->success('bus.created');

        return redirect()->route('buses.index');
    }

    public function edit(Bus $bus)
    {
        $teachers = Teacher::get();

        return view('buses.edit', compact('bus', 'teachers'));
    }

    public function update(UpdateBusRequest $request, Bus $bus)
    {
        $this->dispatchSync(UpdateBus::fromRequest($bus, $request));

        $this->success('bus.updated');

        return redirect()->route('buses.index');
    }

    public function students(Bus $bus)
    {
        $students = $bus->students;

        return view('buses.students', compact('students', 'bus'));
    }
}
