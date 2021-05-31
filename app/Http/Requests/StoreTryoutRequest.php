<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTryoutRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => [
                'required', 'string',
            ],
            'description' => [
                'required', 'string',
            ],
            'held' => [
                'required', 'string',
            ],
            'user_id' => [
                'required', 'string',
            ],
        ];
    }

    public function authorize()
    {
        return Gate::allows('tryouts_access');
    }
}