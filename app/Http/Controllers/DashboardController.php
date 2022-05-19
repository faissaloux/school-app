<?php

namespace App\Http\Controllers;

use App\Models\Bus;

class DashboardController extends Controller
{
    public function index()
    {
        $buses = Bus::get();

        return view('dashboard', compact('buses'));
    }
}
