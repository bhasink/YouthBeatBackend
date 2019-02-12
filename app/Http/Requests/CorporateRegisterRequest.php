<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorporateRegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'company' => 'required',
            'phone_no' => 'required|numeric',
            'what_are_you_looking_for' => 'required',
            'is_permitted_for_future_communication' => 'required',
        ];
    }
}