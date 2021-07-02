<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTryoutRequest extends FormRequest
{
    public function authorize()
    {
        //return Gate::allows('tryouts_access');
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required', 'string',
            ],
            'organizer_name' => [
                'required', 'string',
            ],
            'description' => [
                'required', 'string',
            ],
            'held' => [
                'required', 'date',
            ],
            'due' => [
                'required', 'date',
            ],
            // 'user_id' => [
            //     'required','exists:users,id'
            // ],
            'cluster_id' => [
                'required',
            ],
        ];
    }
}
