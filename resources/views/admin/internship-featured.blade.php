
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

                        @if(Session::has('alert-featured-internship-success'))
                            <div class="alert alert-success" role="alert">
                                Internship Featured sucessfully Created.
                            </div>
                        @endif

                    </div>



                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Internship<small>Featured</small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            {!! Form::open(array('action'=>'AdminController@featured_internship_update','method'=>'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}

                            <select name="featured_internship[]" class="soft_skill_list"  id="soft_skill_list" multiple="multiple">

                                @if(isset($get_internships))

                                    @foreach($get_internships as $key=>$get_internship_data)

                                        <option value="{{$get_internship_data->id}}">{{$get_internship_data->title}}</option>

                                    @endforeach
                                @endif

                            </select>

                            <button type="submit" class="btn btn-primary" style="margin-bottom: 0px;">Create</button>

                            {!! Form::close() !!}

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

