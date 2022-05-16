<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusRequest;
use App\Jobs\CreateBus;
use App\Models\Teacher;

class BusController extends Controller
{
    public function index()
    {
        return view('buses.index');
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
}
