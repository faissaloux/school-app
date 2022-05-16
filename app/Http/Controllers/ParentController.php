<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParentRequest;
use App\Jobs\CreateParent;

class ParentController extends Controller
{
    public function index()
    {
        return view('parents.index');
    }

    public function create()
    {
        return view('parents.create');
    }

    public function store(StoreParentRequest $request)
    {
        $this->dispatchSync(CreateParent::fromRequest($request));

        $this->success('parent.created');

        return redirect()->route('parents.index');
    }
}
