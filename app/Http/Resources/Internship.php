<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Internship extends JsonResource
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
            'id' => $this->id,
            'category' => $this->category->name,
            'city_id' => $this->city->city_name,
            'title' => $this->title,
            'slug' => $this->slug,
            'internship_logo' => $this->internship_logo,
            'internship_start_date' => $this->internship_start_date,
            'internship_end_date' => $this->internship_end_date,
            'internship_deadline' => $this->internship_deadline,
            'no_of_internship_available' => $this->no_of_internship_available,
            'is_paid' => $this->is_paid,
            'any_stipend' => $this->any_stipend,
            'internship_duration' => $this->internship_duration,
            'about_brand' => $this->about_brand,
            'about_internship' => $this->about_internship,
            'internship_criteria' => $this->internship_criteria,
            'internship_perks' => $this->internship_perks,
            'location' => $this->location,
            'internship_q1' => $this->internship_q1,
            'internship_q2' => $this->internship_q2,
            'internship_q3' => $this->internship_q3,
            'internship_q4' => $this->internship_q4,
            'internship_q5' => $this->internship_q5,
            'status' => $this->status,

        ];
    }
}
