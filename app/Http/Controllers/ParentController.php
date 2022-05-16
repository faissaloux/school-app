<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParentRequest;
use App\Http\Requests\UpdateParentRequest;
use App\Jobs\CreateParent;
use App\Jobs\UpdateParent;
use App\Models\Parents;

class ParentController extends Controller
{
    public function index()
    {
        $parents = Parents::get();

        return view('parents.index', compact('parents'));
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

    public function edit(Parents $parent)
    {
        return view('parents.edit', compact('parent'));
    }

    public function update(UpdateParentRequest $request, Parents $parent)
    {
        $this->dispatchSync(UpdateParent::fromRequest($parent, $request));

        $this->success('parent.updated');

        return redirect()->route('parents.index');
    }
}
