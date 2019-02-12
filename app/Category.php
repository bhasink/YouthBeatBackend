<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Internship;

class Category extends Model
{

    protected $fillable=[
        'name'
    ];

    public function internship(){
        return $this->hasMany(Internship::class);
    }
}
