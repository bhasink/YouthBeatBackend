
<!--Header include-->

@include('layouts.header')

<!--Header include-->

<div class="container body">
    <div class="main_container">


        <!--Sidebar include-->

    @include('layouts.sidebar')

    <!--Sidebar include-->


        <!--Sidebar include-->

    @include('layouts.navbar')

    <!--Sidebar include-->


        <!-- page content -->
        <div class="right_col" role="main">


            <div class="row">


                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Internship<small>Leads</small></h2>

                            <div class="clearfix"></div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="x_panel">
                                <div class="x_title">

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>College</th>
                                            <th>Year</th>
                                            <th>City</th>
                                            <th>Phone&nbsp;No</th>
                                            <th>Course</th>
                                            <th>Area of interest</th>
                                            <th>Who is your role model in life:&nbsp;</th>
                                            <th>What type of internship are you looking:&nbsp;</th>
                                            <th>In which field are you looking forward to intern:&nbsp;</th>
                                            <th>Additional question 1:&nbsp;</th>
                                            <th>Additional question 2:&nbsp;</th>
                                            <th>Additional question 3:&nbsp;</th>
                                            <th>Additional question 4:&nbsp;</th>
                                            <th>Additional question 5:&nbsp;</th>
                                            <th>Permitted for future communication</th>
                                            <th>Created_At: </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($get_internship_leads))

                                            @foreach($get_internship_leads as $key=>$get_internship_leads_data)

                                                <tr>
                                                    <td>{{$get_internship_leads_data->id}}</td>
                                                    <td>{{$get_internship_leads_data->name}}</td>
                                                    <td>{{$get_internship_leads_data->email}}</td>
                                                    <td>{{$get_internship_leads_data->college}}</td>
                                                    <td>{{$get_internship_leads_data->study_year}}</td>
                                                    <td>{{$get_internship_leads_data->city}}</td>
                                                    <td>{{$get_internship_leads_data->phone_no}}</td>
                                                    <td>{{$get_internship_leads_data->course}}</td>
                                                    <td>{{$get_internship_leads_data->area_of_interest}}</td>
                                                    <td>{{$get_internship_leads_data->who_is_your_role_model_in_life}}</td>
                                                                        <td>{{$get_internship_leads_data->what_type_of_internship_are_you_looking_forward_to}}</td>
                                                                    <td>{{$get_internship_leads_data->in_which_field_are_you_looking_forward_to_intern}}</td>

                                                    <td>{{$get_internship_leads_data->internship->internship_q1 !=null ? $get_internship_leads_data->internship->internship_q1.' ? Answer:':''}}   {{$get_internship_leads_data->additional_answer_1}}</td>

                                                    <td>{{$get_internship_leads_data->internship->internship_q2 !=null ? $get_internship_leads_data->internship->internship_q2.' ? Answer:':''}}   {{$get_internship_leads_data->additional_answer_2}}</td>

                                                    <td>{{$get_internship_leads_data->internship->internship_q3 !=null ? $get_internship_leads_data->internship->internship_q3.' ? Answer:':''}}   {{$get_internship_leads_data->additional_answer_3}}</td>

                                                    <td>{{$get_internship_leads_data->internship->internship_q4 !=null ? $get_internship_leads_data->internship->internship_q4.' ? Answer:':''}}   {{$get_internship_leads_data->additional_answer_4}}</td>

                                                    <td>{{$get_internship_leads_data->internship->internship_q5 !=null ? $get_internship_leads_data->internship->internship_q5.' ? Answer:':''}}   {{$get_internship_leads_data->additional_answer_5}}</td>
                                                                                <td>{{$get_internship_leads_data->is_permitted_for_future_communication == 1? 'True':'False'}}</td>
                                                    <td>{{$get_internship_leads_data->created_at}}</td>
                                                </tr>

                                            @endforeach
                                        @endif

                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
            <br />

        </div>
        <!-- /page content -->

        <!--Footer include-->

    @include('layouts.footer')

    <!--Footer include-->

    </div>
</div>

<!--FooterJs include-->

@include('layouts.footerjs')

<!--Footer include-->
