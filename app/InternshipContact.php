<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipContact extends Model
{
    protected $fillable =[
      'internship_id',
        'name',
        'email',
        'college',
        'city',
        'phone_no',
        'study_year',
        'course',
        'area_of_interest',
        'who_is_your_role_model_in_life',
        'what_type_of_internship_are_you_looking_forward_to',
        'in_which_field_are_you_looking_forward_to_intern',
        'additional_answer_1',
        'additional_answer_2',
        'additional_answer_3',
        'additional_answer_4',
        'additional_answer_5',
        'is_permitted_for_future_communication'
    ];
}
