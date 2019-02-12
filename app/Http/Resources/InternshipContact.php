<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InternshipContact extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'internship_id' => $request->internship_id,
            'name' => $request->name,
            'email' => $request->email,
            'college' => $request->college,
            'city' => $request->city,
            'phone_no' => $request->phone_no,
            'study_year' => $request->study_year,
            'course' => $request->course,
            'area_of_interest' => $request->area_of_interest,
            'who_is_your_role_model_in_life' => $request->who_is_your_role_model_in_life,
            'what_type_of_internship_are_you_looking_forward_to' => $request->what_type_of_internship_are_you_looking_forward_to,
            'in_which_field_are_you_looking_forward_to_intern' => $request->in_which_field_are_you_looking_forward_to_intern,
            'additional_answer_1' => $request->additional_answer_1,
            'additional_answer_2' => $request->additional_answer_2,
            'additional_answer_3' => $request->additional_answer_3,
            'additional_answer_4' => $request->additional_answer_4,
            'additional_answer_5' => $request->additional_answer_5,
            'is_permitted_for_future_communication' => $request->is_permitted_for_future_communication,
        ];
    }
}