<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Transformers\ChildrenTransformer;

class ParentController extends Controller
{
    public function getChildren()
    {
        $authParent = auth()->user()->parent;
        $data = transformData($authParent->children, new ChildrenTransformer());

        return response()->data($data);
    }
}
