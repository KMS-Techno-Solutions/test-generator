@extends('common.app')
@section('content')
<!-- Start content -->
<div class="content">
    <div class="container">
        <div class="row">
           <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Adminox</a>
                    </li>
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="active">
                        Dashboard 1
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">

        <div class="col-lg-6 col-md-6">
            <div class="card-box widget-box-two widget-two-custom">
                <i class="mdi mdi-library-books widget-two-icon"></i>
                <div class="wigdet-two-content">
                    <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Question Paper</p>
                    <h2 class=""> <span data-plugin="counterup"></span></h2>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-6 col-md-6">
            <div class="card-box widget-box-two widget-two-custom">
                <i class="fa fa-graduation-cap widget-two-icon"></i>
                <div class="wigdet-two-content">
                    <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Course</p>
                    <h2 class=""><span></span> <span data-plugin="counterup"></span></h2>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-6 col-md-6">
            <div class="card-box widget-box-two widget-two-custom">
                <i class=" mdi mdi-buffer widget-two-icon"></i>
                <div class="wigdet-two-content">
                    <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Subject</p>
                    <h2 class=""><span></span> <span data-plugin="counterup"></span></h2>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-6 col-md-6">
            <div class="card-box widget-box-two widget-two-custom">
                <i class="mdi mdi-pencil-box widget-two-icon"></i>
                <div class="wigdet-two-content">
                    <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Question</p>
                                    <h2 class=""><span></span> <span data-plugin="counterup"></span></h2>
                </div>
            </div>
        </div><!-- end col -->

    </div>
    <!-- end row -->


   {{--  <div class="row">
        <div class="col-lg-4">
            <div class="card-box">
                <h4 class="header-title m-t-0 m-b-30">Revenue Comparison</h4>

                <div class="text-center">
                    <h5 class="font-normal text-muted">You have to pay</h5>
                    <h3 class="m-b-30"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 25643 <small>USD</small></h3>
                </div>

                <div class="chart-container">
                    <div class="" style="height:280px" id="platform_type_dates_donut"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card-box">
                <h4 class="header-title m-t-0 m-b-30">Visitors Overview</h4>

                <div class="text-center">
                    <h5 class="font-normal text-muted">You have to pay</h5>
                    <h3 class="m-b-30"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 5623 <small>USD</small></h3>
                </div>

                <div class="chart-container">
                    <div class="" style="height:280px" id="user_type_bar"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card-box">
                <h4 class="header-title m-t-0 m-b-30">Goal Completion</h4>

                <div class="text-center">
                    <h5 class="font-normal text-muted">You have to pay</h5>
                    <h3 class="m-b-30"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 12548 <small>USD</small></h3>
                </div>

                <div class="chart-container">
                    <div class="chart has-fixed-height" style="height:280px" id="page_views_today"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end row -->


    <div class="row">
        <div class="col-lg-6">


        </div>
        <!-- end col -->

        <div class="col-lg-3">

        </div>


        <div class="col-lg-3">


        </div>

    </div>
    <!--- end row -->




</div> <!-- container -->

</div> <!-- content -->
@endsection