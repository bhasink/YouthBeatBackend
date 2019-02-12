
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
                            <h2>Corporate<small>Leads</small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th>Phone&nbsp;No</th>
                                    <th>What are you looking for</th>
                                    <th>Permitted for future communication</th>
                                    <th>Created_At</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if(isset($get_corporate_leads))

                                    @foreach($get_corporate_leads as $key=>$get_corporate_leads_data)

                                        <tr>
                                            <td>{{$get_corporate_leads_data->id}}</td>
                                            <td>{{$get_corporate_leads_data->name}}</td>
                                            <td>{{$get_corporate_leads_data->email}}</td>
                                            <td>{{$get_corporate_leads_data->company}}</td>
                                            <td>{{$get_corporate_leads_data->phone_no}}</td>
                                            <td>{{$get_corporate_leads_data->what_are_you_looking_for}}</td>
                                            <td>{{$get_corporate_leads_data->is_permitted_for_future_communication == 1? 'True':'False'}}</td>
                                            <td>{{$get_corporate_leads_data->created_at}}</td>
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
