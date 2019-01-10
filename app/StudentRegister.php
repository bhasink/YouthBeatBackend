<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRegister extends Model
{
    protected $fillable = [
        'name',
        'email',
        'college',
        'year',
        'city',
        'phone_no',
        'is_permitted_for_future_communication'
    ];
}
