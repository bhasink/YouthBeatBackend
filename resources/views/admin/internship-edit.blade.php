
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



                    <div class="flash-message">

                        @if(Session::has('alert-delete'))
                            <div class="alert alert-success" role="alert">
                                Internship sucessfully deleted.
                            </div>
                        @endif
                        @if(Session::has('alert-delete-fail'))
                            <div class="alert alert-success" role="alert">
                                Problem while deleting internship.
                            </div>
                        @endif

                    </div>


                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Internship <small>Edit</small></h2>
                            <div class="clearfix"></div>
                        </div>

                        @if(isset($get_internship))

                        <div class="x_content">

                            {!! Form::open(array('action'=>'AdminController@internship_update_save','method'=>'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}

                            <input type="hidden" name="csrf_field" value="{{csrf_token()}}">
                            <input type="hidden" name="internship_id" value="{{$get_internship->id}}">

                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label for="Title">Title: </label>
                                    <input type="text" id="Title" class="form-control" name="title" value="{{$get_internship->title}}" />
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                </div>

                                <div class="col-md-6">
                                    <label for="location">Location: </label>
                                    <input type="text" id="location" class="form-control" name="location" value="{{$get_internship->location}}" />
                                    <span class="text-danger">{{ $errors->first('location') }}</span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6">

                                    <label for="internship_category">Select Category: </label>

                                    <select id="internship_category" name="internship_category" class="form-control"  >

                                        <option value="">Select Category..</option>

                                        @if(isset($get_categories))

                                            @foreach($get_categories as $key=> $value)
                                                <option {{$get_internship->category_id == $value->id ? 'selected':''}} value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach

                                        @endif

                                    </select>

                                    <span class="text-danger">{{ $errors->first('internship_category') }}</span>

                                </div>

                                <div class="col-md-6">

                                    <label for="internship_city">Select City: </label>

                                    <select id="internship_city" name="internship_city" class="form-control"  >

                                        <option value="">Select City..</option>

                                        @if(isset($get_cities))

                                            @foreach($get_cities as $key=> $value)
                                                <option {{$get_internship->city_id == $value->id ? 'selected':''}} value="{{$value->id}}">{{$value->city_name}}</option>
                                            @endforeach

                                        @endif

                                    </select>

                                    <span class="text-danger">{{ $errors->first('internship_city') }}</span>


                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="col-md-6">

                                    <label for="heard">Internship Duration: </label>
                                    <select id="heard" name="internship_duration" class="form-control"  >
                                        <option value="">Select Duration..</option>
                                        <option  {{$get_internship->internship_duration == 1 ? 'selected':''}}  value="1">1</option>
                                        <option  {{$get_internship->internship_duration ? 'selected':''}}  value="2">2</option>
                                        <option  {{$get_internship->internship_duration == 3 ? 'selected':''}}  value="3">3</option>
                                        <option  {{$get_internship->internship_duration == 4 ? 'selected':''}}  value="4">4</option>
                                        <option  {{$get_internship->internship_duration == 5 ? 'selected':''}}  value="5">5</option>
                                        <option  {{$get_internship->internship_duration == 6 ? 'selected':''}}  value="6">6</option>
                                        <option  {{$get_internship->internship_duration == 7 ? 'selected':''}}  value="7">7</option>
                                        <option  {{$get_internship->internship_duration == 8 ? 'selected':''}}  value="8">8</option>
                                        <option  {{$get_internship->internship_duration == 9 ? 'selected':''}}  value="9">9</option>
                                        <option  {{$get_internship->internship_duration == 10 ? 'selected':''}}  value="10">10</option>
                                        <option  {{$get_internship->internship_duration == 11 ? 'selected':''}}  value="10">11</option>
                                        <option  {{$get_internship->internship_duration == 12 ? 'selected':''}}  value="10">12</option>

                                    </select>


                                    <span class="text-danger">{{ $errors->first('internship_duration') }}</span>


                                </div>

                                <div class="col-md-6">

                                    <label for="no_of_internship_available">No. of internship available: </label>
                                    <input type="number" min="1" id="no_of_internship_available" class="form-control" name="no_of_internship_available" value="{{$get_internship->no_of_internship_available}}" />

                                    <span class="text-danger">{{ $errors->first('no_of_internship_available') }}</span>


                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="col-md-6">

                                    <label for="internship_logo">Internship Logo: </label>

                                    <input type="file" id="internship_logo" class="form-control" value="{{$get_internship->internship_logo}}" name="internship_logo"  />

                                    <span class="text-danger">{{ $errors->first('internship_logo') }}</span>

                                    <img width="100" height="100" src="/internship/images/{{$get_internship->internship_logo}}" alt="">
                                </div>

                                <div class="col-md-6">

                                    <label for="internship_start_date">Internship Start Date: </label>
                                    <input type="date" id="internship_start_date" class="form-control" value="{{$get_internship->internship_start_date}}" name="internship_start_date"  />

                                    <span class="text-danger">{{ $errors->first('internship_start_date') }}</span>

                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="col-md-6">

                                    <label for="internship_end_date">Internship End Date: </label>
                                    <input type="date" id="internship_end_date" class="form-control" name="internship_end_date" value="{{$get_internship->internship_end_date}}" />

                                    <span class="text-danger">{{ $errors->first('internship_end_date') }}</span>


                                </div>


                                <div class="col-md-6">

                                    <label for="internship_deadline">Internship Deadline: </label>
                                    <input type="date" id="internship_deadline" class="form-control" name="internship_deadline" value="{{$get_internship->internship_deadline}}" />
                                    <span class="text-danger">{{ $errors->first('internship_deadline') }}</span>


                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="col-md-2">

                                    <br>

                                    <label>Is Paid:</label>
                                    <p>
                                        Yes:
                                        <input  type="radio" {{$get_internship->is_paid == 1 ? 'checked':''}}  name="is_paid" id="ifYes" value="1"   /> No:
                                        <input  type="radio" {{$get_internship->is_paid == 0 ? 'checked':''}}  name="is_paid" id="is_paidNo" value="0"  />
                                    </p>

                                </div>


                                <div class="col-md-3" id="ifYesBox">

                                    <br>

                                    <div id="stipend_box">

                                            @if($get_internship->any_stipend != null)
                                                <div id="StipendDiv">
                                                    <label>Stipend </label>
                                                    <input min="1" class="form-control" type="number" name="any_stipend" id="any_stipend" required="" value="{{$get_internship->any_stipend}}">
                                                </div>

                                            @endif

                                    </div>


                                </div>

                                <br>

                            </div>

                            <div class="col-md-12">

                                <label for="about_brand">About Brand: </label>
                                <textarea  class="form-control  placeholder"  name="about_brand"  id="about_brand"   >{{$get_internship->about_brand}}</textarea>

                                <span class="text-danger">{{ $errors->first('about_brand') }}</span>


                            </div>

                            <div class="col-md-12">

                                <label for="about_internship">About Internship: </label>
                                <textarea id="about_internship"  class="form-control" name="about_internship"  >{{$get_internship->about_internship}}</textarea>

                                <span class="text-danger">{{ $errors->first('about_internship') }}</span>


                            </div>

                            <div class="col-md-12">

                                <label for="internship_criteria">Internship Criteria: </label>
                                <textarea id="internship_criteria"  class="form-control" name="internship_criteria"   >{{$get_internship->internship_criteria}}</textarea>

                                <span class="text-danger">{{ $errors->first('internship_criteria') }}</span>


                            </div>

                            <div class="col-md-12">

                                <label for="internship_perks">Internship Perks: </label>
                                <textarea id="internship_perks"  class="form-control" name="internship_perks">{{$get_internship->internship_perks}}</textarea>

                                <span class="text-danger">{{ $errors->first('internship_perks') }}</span>


                            </div>


                            <div class="col-md-12">

                                <hr>

                                <label>Additional Question Panel: </label>

                                <hr>

                            </div>


                            <div id='TextBoxesGroup' class="col-md-12">

                                        @if($get_internship->internship_q1 != null)
                                            <div id="TextBoxDiv1">
                                                <label>Additional Question 1:</label>
                                                <input class="form-control" type="text" name="additional_question_1" id="textbox1" required="" value="{{$get_internship->internship_q1}}">
                                                <input type="hidden" class="AQ" value="1">
                                            </div>
                                        @endif

                                        @if($get_internship->internship_q2 != null)
                                            <div id="TextBoxDiv2">
                                                <label>Additional Question 2:</label>
                                                <input class="form-control" type="text" name="additional_question_2" id="textbox1" required="" value="{{$get_internship->internship_q2}}">
                                                <input type="hidden" class="AQ" value="2">
                                            </div>
                                        @endif

                                        @if($get_internship->internship_q3 != null)
                                            <div id="TextBoxDiv3">
                                                <label>Additional Question 3:</label>
                                                <input class="form-control" type="text" name="additional_question_3" id="textbox1" required="" value="{{$get_internship->internship_q3}}">
                                                <input type="hidden" class="AQ" value="3">
                                            </div>
                                        @endif

                                        @if($get_internship->internship_q4 != null)
                                            <div id="TextBoxDiv4">
                                                <label>Additional Question 4:</label>
                                                <input class="form-control" type="text" name="additional_question_4" id="textbox1" required="" value="{{$get_internship->internship_q4}}">
                                                <input type="hidden" class="AQ" value="4">
                                            </div>
                                        @endif

                                            @if($get_internship->internship_q5 != null)
                                                <div id="TextBoxDiv5">
                                                    <label>Additional Question 5:</label>
                                                    <input class="form-control" type="text" name="additional_question_5" id="textbox1" required="" value="{{$get_internship->internship_q5}}">
                                                    <input type="hidden" class="AQ" value="5">
                                                </div>
                                            @endif

                            </div>

                            <div class="col-md-12">
                                <input class="btn" type='button' value='Add Question' id='addButton'>
                                <input class="btn" type='button' value='Remove Question' id='removeButton'>
                            </div>





                            <div class="col-md-6">

                                <br>

                                <label>Status: </label>
                                <p>
                                    Active:
                                    <input type="radio"  name="status" id="active" value="1"  {{$get_internship->status == 1 ? 'checked':''}}  />
                                    Deactive:
                                    <input type="radio"  name="status" id="Deactive" value="0" {{$get_internship->status == 0 ? 'checked':''}} />
                                </p>

                            </div>


                            <div class="col-md-12">

                                <br>

                                <button type="submit" class="btn btn-primary">Update Internship</button>

                            </div>





                        {!! Form::close() !!}
                        <!-- end form for validations -->

                        </div>

                        @endif

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

<script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    $(function(){
        $('input[name="is_paid"]').click(function(){
            if ($('#ifYes').is(':checked'))
            {

                var newTextBoxDiv = $(document.createElement('div'))
                    .attr("id",'StipendDiv');

                newTextBoxDiv.after().html('<label>Stipend </label>' + '<input min="1" class="form-control" type="number" name="any_stipend" id="any_stipend" required >');

                newTextBoxDiv.appendTo("#stipend_box");

            }else{
                $("#StipendDiv").remove();
            }
        });
    });
</script>


<script type="text/javascript">

    $(document).ready(function(){

        var counter = <?php if(isset($already_created_quesiton)){ echo $already_created_quesiton+1; }else{echo 1;} ?>;

        $("#addButton").click(function(){

            if(counter>5){
                alert("Only 5 additional question allow");
                return false;
            }

            var newTextBoxDiv = $(document.createElement('div'))
                .attr("id",'TextBoxDiv' + counter);

            newTextBoxDiv.after().html('<label>Additional Question '+counter+':</label>' + '<input class="form-control" type="text" name="additional_question_' + counter + '" id="textbox' + counter + '" required >');

            newTextBoxDiv.appendTo("#TextBoxesGroup");

            counter++;

        });

        $("#removeButton").click(function(){
            if(counter==1){
                alert('No more textbox to remove');
                return false;
            }

            counter--;

            $("#TextBoxDiv" + counter).remove();
        });

    });

    //TINY MCE

    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste "
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter      alignright alignjustify | bullist numlist outdent indent | link image",
        setup: function (editor) {
            editor.on('change', function () {
                tinymce.triggerSave();
            });
        }
    });




</script>


<!--FooterJs include-->

@include('layouts.footerjs')

<!--Footer include-->
