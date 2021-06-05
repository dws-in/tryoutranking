<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreSupportRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('support_access');
    }

    public function rules()
    {
        return [
            'email' => [
                'required', 'email',
            ],
            'description' => [
                'required',
            ]

        ];
    }
}
