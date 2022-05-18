<?php

namespace App\Http\Requests\Api;

use App\Models\TripStatus;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreTripStatusRequest extends FormRequest
{
    public function rules()
    {
        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'status' => ['required', 'string', 'in:' . implode(',', TripStatus::$statuses)],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $response = response()->error($validator->errors()->messages());

        throw new HttpResponseException($response);
    }
}
