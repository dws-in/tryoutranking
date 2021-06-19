<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreScoreRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('score_access');
    }

    public function rules()
    {
        return [
            'user_id' => [
                'required',
            ],
            'indonesia' => [
                'required',
            ],
            'english' => [
                'required',
            ],
            'mathematic' => [
                'required',
            ],
            'physic' => [
                'required',
            ],
            'biology' => [
                'required',
            ],
            'chemistry' => [
                'required',
            ],
            'geography' => [
                'required',
            ],
            'economy' => [
                'required',
            ],
            'history' => [
                'required',
            ],
            'sociology' => [
                'required',
            ],

        ];
    }
}
