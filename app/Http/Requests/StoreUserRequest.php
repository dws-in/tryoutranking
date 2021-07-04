<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('users_access');
    }

    public function rules()
    {
        return [
            'name'    => [
                'string',
                'required',
            ],
            'email'   => [
                'required',
                'unique:users,email,',
            ],
            // 'password'    => [
            //     'string',
            //     'required',
            // ],
            'role_id' => [
                'required',
                'exists:roles,id',
            ],
        ];
    }


}
