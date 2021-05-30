<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class taglineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'headline'->require|string,
            'bodyline'->require|string,
            'addressSatu'->require|string,
            'addressDua'->require|string,
            'phoneNumber'->require|string,
            'email'->require|string
        ];
    }
}
