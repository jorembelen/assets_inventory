@extends('layouts.main')

@section('content') 

<div class="content-page">
    <div class="content">
        

        <!-- Start Content-->
        <div class="container-fluid">

            @include('sweetalert::alert')

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Asset Management</a></li>
                                <li class="breadcrumb-item active">Search Assets</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Search Assets</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

     <div class="row">

                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"></h4>
                                        <p class="sub-header">
                                            <button type="button" class="btn btn-success btn-rounded width-sm waves-effect waves-light" data-toggle="modal" data-target="#add"> <i class="fas fa-laptop-medical"></i> Add</button>
                                            <a href="/assets" class="btn btn-purple btn-rounded width-md waves-effect waves-lightt"><i class=" fas fa-search-plus"></i> Show All</a>
                                        </p>    
            
              
                                                    <div class="mb-3">
                                                        <form action="{{route('search.assets')}}" method="POST">
                                                            @csrf
                                                        <div class="row">
                                                            <div class="col-12 text-sm-center form-inline">
                                                                <div class="form-group mr-2">
                                                                    <button id="demo-btn-addrow" class="btn btn-primary btn--icon-text"><i class=" fab fa-sistrix"></i> Search</button>
                                                                </div>
                                                            </form>
                                                                <div class="form-group">
                                                                    <input class="form-control" id="search" type="text" name="search" placeholder="Enter Search Value" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    {{-- <label for="type" class="col-12">Search by:</label> --}}
                                                                    <div class="col-9">
                                                                        <select name="options" id="demo-foo-filter-status" class="custom-select">
                                                                            <option value="serial_number">Serial Number</option>
                                                                            <option value="emp_id">Badge Number</option>
                                                                            <option value="type">Type</option>
                                                                            <option value="ritcco">Ritcco Number</option>
                                                                            <option value="description">Description</option>
                                                                            <option value="mobile_number">Mobile Number</option>
                                                                        </select>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            </div>
            
                                                            </div>
                                                            </div>

                      

                                    </div>
                                </div>
                            </div> <!-- end row -->

                
                        </div> <!-- end container-fluid -->

                    </div> <!-- end content -->



                    @include('includes.assets.add')


@endsection