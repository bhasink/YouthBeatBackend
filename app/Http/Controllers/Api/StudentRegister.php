<?php

namespace App\Http\Controllers\Api;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRegisterRequest;
use App\StudentRegister as StudentRegistration;
use App\Http\Resources\StudentRegister as StudentResource;

class StudentRegister extends Controller
{

    public function __invoke(StudentRegisterRequest $request)
    {
       $student_save = StudentRegistration::create([
           'name' => $request->name,
           'email' => $request->email,
           'college' => $request->college,
           'year' => $request->year,
           'city' => $request->city,
           'phone_no' => $request->phone_no,
           'is_permitted_for_future_communication' => $request->is_permitted_for_future_communication,
       ]);

       return new StudentResource($student_save);
    }
}