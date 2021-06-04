<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class RegisterTryoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('support_access');
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
            'nama_lengkap' => [
                'required',
            ],
            'asal_sekolah' => [
                'required',
            ],
            'tahun_lulus' => [
                'required',
            ],
            'phone_number' => [
                'required',
            ],
            // 'nama_lengkap' => 'required',
            // 'asal_sekolah' => 'required',
            // 'tahun_lulus' => 'required',
            // 'phone_number' => 'required',
        ];
    }
}
