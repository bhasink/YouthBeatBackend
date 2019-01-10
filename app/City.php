<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Internship;

class City extends Model
{
    protected $fillable=[
        'city_name',
        'city_banner'
    ];

    public function internship(){
        return $this->hasMany('App\Internship');
    }
}
