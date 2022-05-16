<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateParentRequest extends FormRequest
{
    public function rules()
    {
        $parent = $this->route()->parameter('parent');

        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', "unique:users,email,$parent->user_id"],
            'password' => ['nullable', 'string', 'confirmed'],
        ];
    }
}
