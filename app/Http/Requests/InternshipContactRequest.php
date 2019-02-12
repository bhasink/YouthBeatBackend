<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Request;

class InternshipContactRequest extends FormRequest
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

        if (Request::input('external_question') == 1) {
            return [
                'internship_id' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'college' => 'required',
                'city' => 'required',
                'phone_no' => 'required|numeric',
                'study_year' => 'required|numeric',
                'course' => 'required',
                'area_of_interest' => 'required',
                'who_is_your_role_model_in_life' => 'required',
                'what_type_of_internship_are_you_looking_forward_to' => 'required',
                'in_which_field_are_you_looking_forward_to_intern' => 'required',
                'is_permitted_for_future_communication' => 'required',
                'additional_answer_1' => 'required',
            ];
        }
        if (Request::input('external_question') == 2) {
            return [
                'internship_id' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'college' => 'required',
                'city' => 'required',
                'phone_no' => 'required|numeric',
                'study_year' => 'required|numeric',
                'course' => 'required',
                'area_of_interest' => 'required',
                'who_is_your_role_model_in_life' => 'required',
                'what_type_of_internship_are_you_looking_forward_to' => 'required',
                'in_which_field_are_you_looking_forward_to_intern' => 'required',
                'is_permitted_for_future_communication' => 'required',
                'additional_answer_1' => 'required',
                'additional_answer_2' => 'required'
            ];
        }
        if (Request::input('external_question') == 3) {
            return [
                'internship_id' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'college' => 'required',
                'city' => 'required',
                'phone_no' => 'required|numeric',
                'study_year' => 'required|numeric',
                'course' => 'required',
                'area_of_interest' => 'required',
                'who_is_your_role_model_in_life' => 'required',
                'what_type_of_internship_are_you_looking_forward_to' => 'required',
                'in_which_field_are_you_looking_forward_to_intern' => 'required',
                'is_permitted_for_future_communication' => 'required',
                'additional_answer_1' => 'required',
                'additional_answer_2' => 'required',
                'additional_answer_3' => 'required'
            ];
        }
        if (Request::input('external_question') == 4) {
            return [
                'internship_id' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'college' => 'required',
                'city' => 'required',
                'phone_no' => 'required|numeric',
                'study_year' => 'required|numeric',
                'course' => 'required',
                'area_of_interest' => 'required',
                'who_is_your_role_model_in_life' => 'required',
                'what_type_of_internship_are_you_looking_forward_to' => 'required',
                'in_which_field_are_you_looking_forward_to_intern' => 'required',
                'is_permitted_for_future_communication' => 'required',
                'additional_answer_1' => 'required',
                'additional_answer_2' => 'required',
                'additional_answer_3' => 'required',
                'additional_answer_4' => 'required',

            ];
        }
        if (Request::input('external_question') == 5) {
            return [
                'internship_id' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'college' => 'required',
                'city' => 'required',
                'phone_no' => 'required|numeric',
                'study_year' => 'required|numeric',
                'course' => 'required',
                'area_of_interest' => 'required',
                'who_is_your_role_model_in_life' => 'required',
                'what_type_of_internship_are_you_looking_forward_to' => 'required',
                'in_which_field_are_you_looking_forward_to_intern' => 'required',
                'is_permitted_for_future_communication' => 'required',
                'additional_answer_1' => 'required',
                'additional_answer_2' => 'required',
                'additional_answer_3' => 'required',
                'additional_answer_4' => 'required',
                'additional_answer_5' => 'required',
            ];
        }

    }
}
