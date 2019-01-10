<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\City;

class Internship extends Model
{
    protected $fillable = [
        'category_id',
        'city_id',
        'title',
        'internship_logo',
        'internship_start_date',
        'internship_end_date',
        'internship_deadline',
        'no_of_internship_available',
        'is_paid',
        'any_stipend',
        'internship_duration',
        'about_brand',
        'about_internship',
        'internship_criteria',
        'internship_perks',
        'location',
        'internship_q1',
        'internship_q2',
        'internship_q3',
        'internship_q4',
        'internship_q5',
        'status'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function city(){
        return $this->belongsTo('App\City');
    }
}
