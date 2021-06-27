<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateTryoutRequest extends FormRequest
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
            'description' => [
                'required', 'string',
            ],
            'held' => [
                'required', 'string',
            ],
            'cluster_id' => [
                'required','exists:clusters,id'
            ],
        ];
    }


}
