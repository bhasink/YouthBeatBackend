<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentRegister extends JsonResource
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
            'name' => $request->name,
            'email' => $request->email,
            'college' => $request->college,
            'year' => $request->year,
            'city' => $request->city,
            'phone_no' => $request->phone_no,
            'is_permitted_for_future_communication' => $request->is_permitted_for_future_communication,

        ];
    }
}
