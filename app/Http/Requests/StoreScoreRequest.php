<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreScoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
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
