<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\InternshipContact;
use App\Http\Resources\InternshipContact as InternshipRegisterResource;
use App\Http\Resources\Internship as InternshipResource;
use App\Http\Requests\InternshipContactRequest;

use App\Internship as InternshipModel;
use App\City;
use App\InternshipFeatured;


class Internship extends Controller
{
    public function internship_register(InternshipContactRequest $request){

        $internship_register = InternshipContact::create([
            'internship_id' => $request->internship_id,
            'name' => $request->name,
            'email' => $request->email,
            'college' => $request->college,
            'city' => $request->city,
            'phone_no' => $request->phone_no,
            'study_year' => $request->study_year,
            'course' => $request->course,
            'area_of_interest' => $request->area_of_interest,
            'who_is_your_role_model_in_life' => $request->who_is_your_role_model_in_life,
            'what_type_of_internship_are_you_looking_forward_to' => $request->what_type_of_internship_are_you_looking_forward_to,
            'in_which_field_are_you_looking_forward_to_intern' => $request->in_which_field_are_you_looking_forward_to_intern,
            'additional_answer_1' => $request->additional_answer_1,
            'additional_answer_2' => $request->additional_answer_2,
            'additional_answer_3' => $request->additional_answer_3,
            'additional_answer_4' => $request->additional_answer_4,
            'additional_answer_5' => $request->additional_answer_5,
            'is_permitted_for_future_communication' => $request->is_permitted_for_future_communication,

        ]);

        return new InternshipRegisterResource($internship_register);
    }

    public function internship_data(){

        $get_internship = InternshipModel::with('category')
                                            ->with('city')
                                            ->LatestFirst()
                                            ->paginate(10);

        return InternshipResource::collection($get_internship);
    }

    public function get_particular_internship($id,$slug){

        $internship = InternshipModel::where('id',$id)->where('slug',$slug)
                                       ->with('category')->with('city')->first();

        if($internship == null){
            return response()->json(['error' => 'No internship found','status' => 204]);
        }else{
            return new InternshipResource($internship);
        }
    }

    public function internship_by_city($city_id){

        $get_internship = InternshipModel::where('city_id',$city_id)
                                            ->with('category')
                                            ->with('city')
                                            ->LatestFirst()
                                            ->paginate(10);

        return InternshipResource::collection($get_internship);
    }

    public function get_city_by_name($name){

        $get_city_data = City::whereCityName($name)->get();
        return $get_city_data;
    }

    public function get_featured_internship(){

        $get_featured_internship_data = InternshipFeatured::pluck('internship_id');
        $get_featured_internship = InternshipModel::whereIn('id',$get_featured_internship_data)->get();
        return InternshipResource::collection($get_featured_internship);
    }
}