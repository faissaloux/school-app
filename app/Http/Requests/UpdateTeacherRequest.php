<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
{
    public function rules()
    {
        $teacher = $this->route()->parameter('teacher');

        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', "unique:users,email,$teacher->user_id"],
            'password' => ['nullable', 'string', 'confirmed'],
        ];
    }
}
