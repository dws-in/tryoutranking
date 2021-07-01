<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateScoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'indonesia' => [
                'required','numeric'
            ],
            'english' => [
                'required','numeric'
            ],
            'mathematic' => [
                'required','numeric'
            ],
            'physic' => [
                'required','numeric'
            ],
            'biology' => [
                'required','numeric'
            ],
            'chemistry' => [
                'required','numeric'
            ],
            'geography' => [
                'required','numeric'
            ],
            'economy' => [
                'required','numeric'
            ],
            'history' => [
                'required','numeric'
            ],
            'sociology' => [
                'required','numeric'
            ],
        ];
    }
}
