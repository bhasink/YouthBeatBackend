<?php

namespace App\Http\Controllers\Api;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorporateRegisterRequest;
use App\Http\Resources\CorporateRegister as CorporateResource;
use App\CorporateRegister as CorporateRegistration;

class CorporateRegister extends Controller
{
    public function __invoke(CorporateRegisterRequest $request)
    {

        $corporate_save = CorporateRegistration::create([
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->company,
            'phone_no' => $request->phone_no,
            'what_are_you_looking_for' => $request->what_are_you_looking_for,
            'is_permitted_for_future_communication' => $request->is_permitted_for_future_communication,
        ]);

        return new CorporateResource($corporate_save);

    }
}
