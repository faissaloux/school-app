<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBusRequest extends FormRequest
{
    public function rules()
    {
        return [
            'teacher_id' => ['required', 'integer', 'exists:teachers,id'],
        ];
    }
}
