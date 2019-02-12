<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\City;
use App\Traits\Orderable;

class Internship extends Model
{
    use Orderable;
    
    protected $fillable = [
        'category_id',
        'city_id',
        'title',
        'slug',
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
        return $this->belongsTo(Category::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function scopeSlug($query,$slug){
        $query->where('slug','=',$slug);
    }
}
