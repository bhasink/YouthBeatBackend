<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorporateRegister extends Model
{
    protected $fillable =[
        'name',
        'email',
        'company',
        'phone_no',
        'what_are_you_looking_for',
        'is_permitted_for_future_communication'

    ];
}