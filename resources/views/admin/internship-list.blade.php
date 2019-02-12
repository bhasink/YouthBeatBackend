
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

                                    @if(Session::has('alert-internship-create-success'))
                                            <div class="alert alert-success" role="alert">
                                                Internship sucessfully Created.
                                            </div>
                                    @endif

                                    @if(Session::has('alert-internship-create-fail'))
                                            <div class="alert alert-success" role="alert">
                                                Problem while creating internship.
                                            </div>
                                    @endif

                                    @if(Session::has('alert-internship-update-success'))
                                        <div class="alert alert-success" role="alert">
                                            Internship sucessfully Updated.
                                        </div>
                                    @endif

                                    @if(Session::has('alert-internship-update-fail'))
                                        <div class="alert alert-success" role="alert">
                                            Problem while updating internship.
                                        </div>
                                    @endif

                                    @if(Session::has('alert-internship-delete-success'))
                                        <div class="alert alert-success" role="alert">
                                            Internship sucessfully Deleted.
                                        </div>
                                    @endif

                                    @if(Session::has('alert-internship-delete-fail'))
                                        <div class="alert alert-success" role="alert">
                                            Problem while deleting internship.
                                        </div>
                                    @endif




                    </div>



                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Internship<small>List</small></h2>

                            <div style="float: right;">
                                <a href="{{url('internship/create')}}" class="btn btn-success" style="background-color: #28a745; border-color: #28a745;" href=""><i class="fas fa-plus-square"></i>
                                    Create Internship</a>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Deadline Date</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if(isset($get_internships))

                                    @foreach($get_internships as $key=>$get_internship_data)

                                <tr>
                                    <td>{{$get_internship_data->id}}</td>
                                    <td>{{$get_internship_data->title}}</td>
                                    <td>{{date('d-M-Y', strtotime($get_internship_data->internship_start_date))}}</td>
                                    <td>{{date('d-M-Y', strtotime($get_internship_data->internship_end_date))}}</td>
                                    <td>{{date('d-M-Y', strtotime($get_internship_data->internship_deadline))}}</td>
                                    <td>{{$get_internship_data->status ===1? 'Active': 'Deactive'}}</td>
                                    <td>
                                        <a href="/internship/edit/{{$get_internship_data->id}}" class="btn btn-success" onclick="history.go(0)">Edit</a>
                                    </td>
                                    <td>
                                        <a href="/internship/delete/{{$get_internship_data->id}}" onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                                    @endforeach
                                @endif

                                </tbody>
                            </table>


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
