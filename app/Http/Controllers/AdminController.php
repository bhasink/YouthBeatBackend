<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Internship;
use App\Category;
use App\City;
use App\InternshipFeatured;
use App\CorporateRegister;
use App\StudentRegister;
use App\InternshipContact;
use App\Http\Requests\InternshipRequest;
use App\Http\Requests\InternshipUpdateRequest;
use File;

class AdminController extends Controller
{
    public function internship_list(){

        $get_internships = Internship::all();

        return view('admin.internship-list',compact('get_internships'));

    }

    public function internship_create(){

            $get_categories = Category::all();
            $get_cities = City::all();
            return view('admin.internship-create',compact('get_categories','get_cities'));
    }

    public function internship_create_save(InternshipRequest $request){

        $title = $request->title;
        $location = $request->location;
        $internship_category = $request->internship_category;
        $internship_city = $request->internship_city;
        $internship_duration = $request->internship_duration;
        $no_of_internship_available = $request->no_of_internship_available;
        $internship_start_date = $request->internship_start_date;
        $internship_end_date = $request->internship_end_date;
        $internship_deadline = $request->internship_deadline;
        $is_paid = $request->is_paid;
        $any_stipend = $request->any_stipend;
        $about_brand = $request->about_brand;
        $about_internship = $request->about_internship;
        $internship_criteria = $request->internship_criteria;
        $internship_perks = $request->internship_perks;
        $additional_question_1 = $request->additional_question_1;
        $additional_question_2 = $request->additional_question_2;
        $additional_question_3 = $request->additional_question_3;
        $additional_question_4 = $request->additional_question_4;
        $additional_question_5 = $request->additional_question_5;
        $status = $request->status;

        if( $internship_logo = $request->file('internship_logo')){

            $internship_logo_rename = time() .'-'.$internship_logo->getClientOriginalName();

            $internship_logo->move(public_path().'/internship/images/',$internship_logo_rename);

        }

        $internship_create = Internship::create([
            'title' => $title,
            'slug' => str_slug($title),
            'location' => $location,
            'category_id' => $internship_category,
            'city_id' => $internship_city,
            'internship_duration' => $internship_duration,
            'no_of_internship_available' => $no_of_internship_available,
            'internship_start_date' => $internship_start_date,
            'internship_end_date' => $internship_end_date,
            'internship_deadline' => $internship_deadline,
            'is_paid' => $is_paid,
            'any_stipend' => $any_stipend,
            'about_brand' => $about_brand,
            'about_internship' => $about_internship,
            'internship_criteria' => $internship_criteria,
            'internship_perks' => $internship_perks,
            'internship_q1' => $additional_question_1,
            'internship_q2' => $additional_question_2,
            'internship_q3' => $additional_question_3,
            'internship_q4' => $additional_question_4,
            'internship_q5' => $additional_question_5,
            'internship_logo' => $internship_logo_rename,
            'status' => $status,
        ]);

        if($internship_create){
            $request->session()->flash('alert-internship-create-success','Internship has been successfully created!');
            return redirect('/internship/list');
        }else{
            $request->session()->flash('alert-internship-create-fail','Problem while creating internship!');
            return redirect('/internship/list');
        }

    }

    public function internship_update($id){
        $get_categories = Category::all();
        $get_cities = City::all();
        $get_internship = Internship::findOrFail($id);

        $already_created_quesiton = null;
            if($get_internship->internship_q5 != null){
                $already_created_quesiton = 5;
            }else if($get_internship->internship_q4 != null){
                $already_created_quesiton = 4;
            }else if($get_internship->internship_q3 != null){
                $already_created_quesiton = 3;
            }else if($get_internship->internship_q2 != null){
                $already_created_quesiton = 2;
            }else if($get_internship->internship_q1 != null){
                $already_created_quesiton = 1;
            }

        return view('admin.internship-edit',compact('get_categories','get_cities','get_internship','already_created_quesiton'));
    }

    public function internship_update_save(InternshipUpdateRequest $request){

        $internship_id = $request->internship_id;
        $title = $request->title;
        $location = $request->location;
        $internship_category = $request->internship_category;
        $internship_city = $request->internship_city;
        $internship_duration = $request->internship_duration;
        $no_of_internship_available = $request->no_of_internship_available;
        $internship_start_date = $request->internship_start_date;
        $internship_end_date = $request->internship_end_date;
        $internship_deadline = $request->internship_deadline;
        $is_paid = $request->is_paid;
        $any_stipend = $request->any_stipend;
        $about_brand = $request->about_brand;
        $about_internship = $request->about_internship;
        $internship_criteria = $request->internship_criteria;
        $internship_perks = $request->internship_perks;
        $additional_question_1 = $request->additional_question_1;
        $additional_question_2 = $request->additional_question_2;
        $additional_question_3 = $request->additional_question_3;
        $additional_question_4 = $request->additional_question_4;
        $additional_question_5 = $request->additional_question_5;
        $status = $request->status;

        $internship_update = Internship::findOrFail($internship_id);

        if( $internship_logo = $request->file('internship_logo')){

            $internship_logo_rename = time() .'-'.$internship_logo->getClientOriginalName();

            $internship_logo->move(public_path().'/internship/images/',$internship_logo_rename);

        }else{
            $internship_logo_rename = $internship_update->internship_logo;
        }

        $internship_update->title = $title;
        $internship_update->slug  = str_slug($title);
        $internship_update->location = $location;
        $internship_update->category_id = $internship_category;
        $internship_update->city_id = $internship_city;
        $internship_update->internship_duration = $internship_duration;
        $internship_update->no_of_internship_available = $no_of_internship_available;
        $internship_update->internship_start_date = $internship_start_date;
        $internship_update->internship_end_date = $internship_end_date;
        $internship_update->internship_deadline = $internship_deadline;
        $internship_update->is_paid = $is_paid;
        $internship_update->any_stipend = $any_stipend;
        $internship_update->about_brand = $about_brand;
        $internship_update->about_internship = $about_internship;
        $internship_update->internship_criteria = $internship_criteria;
        $internship_update->internship_perks = $internship_perks;
        $internship_update->internship_q1 = $additional_question_1;
        $internship_update->internship_q2 = $additional_question_2;
        $internship_update->internship_q3 = $additional_question_3;
        $internship_update->internship_q4 = $additional_question_4;
        $internship_update->internship_q5 = $additional_question_5;
        $internship_update->internship_logo = $internship_logo_rename;
        $internship_update->status = $status;
        $check_internship_update =$internship_update->save();

        if($check_internship_update){
            $request->session()->flash('alert-internship-update-success','Internship has been successfully updated!');
            return redirect('/internship/list');
        }else{
            $request->session()->flash('alert-internship-update-fail','Problem while updating internship!');
            return redirect('/internship/list');
        }


    }

    public function internship_delete(Request $request, $id){

        $internship_id = $id;

        $check_internship_delete = Internship::findOrFail($internship_id);

        $logo_file = $check_internship_delete->internship_logo;

        File::delete(public_path().'/internship/images/'.$logo_file);

        $check_internship_delete->delete();

        if($check_internship_delete){
            $request->session()->flash('alert-internship-delete-success','Internship successfully deleted!');
            return redirect('/internship/list');
        }
        else{
            $request->session()->flash('alert-internship-delete-fail','Problem while deleting internship!');
            return redirect('/internship/list');
        }

    }

    public function featured_internship(){
        $get_internships = Internship::all();
        return view('admin.internship-featured',compact('get_internships'));
    }

    public function featured_internship_update(Request $request){

        InternshipFeatured::query()->delete();

        $featured_internship = $request->featured_internship;

        foreach ($featured_internship as $key => $featured_internship){

            $create_featured_internship = new InternshipFeatured;
            $create_featured_internship->internship_id = $featured_internship;
            $create_featured_internship->save();

        }

        $request->session()->flash('alert-featured-internship-success','Featured internship created!');
        return redirect('/internship/featured-internship');
    }

    public function corporate_register(){
        $get_corporate_leads = CorporateRegister::all();
        return view('admin.leads.corporate',compact('get_corporate_leads'));
    }

    public function student_register(){
        $get_students_leads = StudentRegister::all();
        return view('admin.leads.student',compact('get_students_leads'));

    }

    public function internship_register(){
        $get_internship_leads = InternshipContact::with('internship')->get();
        return view('admin.leads.internship',compact('get_internship_leads'));

    }

    public function selective_internship_register(){
        $get_internships = Internship::all();
        return view('admin.leads.selective-internship',compact('get_internships'));

    }

    public function fetch_selective_internship(Request $request){

        $internship_id = $request->internship;
        $get_internships = Internship::all();
        $get_internship_leads = InternshipContact::where('internship_id',$internship_id)->with('internship')->get();
        return view('admin.leads.selective-internship',compact('get_internship_leads','get_internships'));
    }

}