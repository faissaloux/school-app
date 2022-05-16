<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'parent_id' => ['required', 'integer', 'exists:parents,id'],
            'bus_id' => ['required', 'integer', 'exists:buses,id'],
        ];
    }
}
