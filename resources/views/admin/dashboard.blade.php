@extends('layouts.main')

@section('content') 
 
   <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboa</a></li> --}}
                                            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                            {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-account-multiple avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Employees</p>
                                            <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">{{$data[0]}}</span></h3>
                                        <a href="/employees"><p class="m-0"><i class="mdi mdi-account-multiple"></i> Check Details</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom ">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="fas fa-desktop avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Assets</p>
                                            <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">{{$data[1]}}</span></h3>
                                            <a href="/assets"><p class="m-0"><i class="fas fa-desktop"></i> Check Details</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom ">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-account-search avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Assets Assigned</p>
                                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{$data[2]}}</span></h3>
                                            <a href="/checkOuts"><p class="m-0"> <i class="mdi mdi-account-search"></i> Check Details</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom ">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-close-network-outline  avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Assets Available</p>
                                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{$data[3]}}</span></h3>
                                            <a href="/assignable"><p class="m-0">   <i class="mdi mdi-close-network-outline"></i> Check Details</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                        <!-- end row -->    

                     
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

           @include('includes.footer')

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


@endsection