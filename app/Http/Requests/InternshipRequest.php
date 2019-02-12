<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Request;

class InternshipRequest extends FormRequest
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
        return[
            'title' => 'required',
            'location' => 'required',
            'internship_category' => 'required',
            'internship_city' => 'required',
            'internship_duration' => 'required',
            'no_of_internship_available' => 'required',
            'internship_start_date' => 'required',
            'internship_end_date' => 'required|after:internship_start_date',
            'internship_deadline' => 'required|after:internship_start_date|before:internship_end_date',
            'is_paid' => 'required',
            'any_stipend' => 'required_if:is_paid,1',
            'about_brand' => 'required',
            'about_internship' => 'required',
            'internship_criteria' => 'required',
            'internship_perks' => 'required',
            'status' => 'required',
            'internship_logo' => 'required'
        ];
    }
}
