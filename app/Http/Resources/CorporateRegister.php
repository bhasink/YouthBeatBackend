<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CorporateRegister extends JsonResource
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
            'company' => $request->company,
            'what_are_you_looking_for' => $request->what_are_you_looking_for,
            'phone_no' => $request->phone_no,
            'is_permitted_for_future_communication' => 'is_permitted_for_future_communication'
        ];
    }
}
