<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Internship;

class InternshipFeatured extends Model
{
    protected $fillable = [
        'internship_id'
    ];

    public function internship(){
        return $this->hasMany(Internship::class);
    }
}
