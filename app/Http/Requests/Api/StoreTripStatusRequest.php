<?php

namespace App\Http\Requests\Api;

use App\Models\TripStatus;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Arr;

class StoreTripStatusRequest extends FormRequest
{
    public function rules()
    {
        $tripStatuses = TripStatus::$statuses;
        $validStatuses = implode(',', array_diff($tripStatuses, [head($tripStatuses), end($tripStatuses)]));

        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'status' => ['required', 'string', 'in:' . $validStatuses],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $response = response()->error($validator->errors()->messages());

        throw new HttpResponseException($response);
    }
}
