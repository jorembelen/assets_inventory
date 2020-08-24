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
                                <li class="breadcrumb-item active">Employees</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Employees</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

     <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"></h4>
                                        <p class="sub-header">
                                            <button type="button" class="btn btn-success btn-rounded width-sm waves-effect waves-light" data-toggle="modal" data-target="#add"> <i class="fas fa-user-plus"></i> Add</button>    
                                            <a href="/employees" class="btn btn-purple btn-rounded width-sm waves-effect waves-light"><i class=" fas fa-search-plus"></i> Show All</a>
                                        </p>

  
                                        <div class="mb-3">
                                            <form action="{{url('/searchEmployees')}}" method="POST">
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
                                                            <select name="options" id="options" class="form-control">
                                                                <option value="badge">Badge</option>
                                                                <option value="name">Name</option>
                                                                <option value="designation">Designation</option>
                                                                <option value="location">Location</option>
                                                                <option value="unit_code">Unit Code</option>
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


                    @include('includes.employees.add')

@endsection