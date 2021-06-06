<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreRegisterTORequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('register-to_access');
    }

    public function rules()
    {
        return [
            'user_name' => [
                'required',
            ],
            'school_name' => [
                'required',
            ],
            'graduation_date' => [
                'required',
            ],
            'phone_number' => [
                'required',
            ]
        ];
    }
}
