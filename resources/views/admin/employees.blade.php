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
                                        </p>

                                        <div class="custom-dd dd" id="nestable_list_1">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="2">
                                                    <div class="dd-handle">
                                                        Import Employees
                                                    </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="3">
                                                            <div class="dd-handle">
                                                                Coffee with the team
                                                            </div>
                                                        </li>
                                                       
                                                    </ol>
                                                </li>

                                            </ol>
                                        </div>

                                        <div class="mb-3">
                                            <form action="{{url('/search')}}" method="POST">
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
                                                                <option value="location">Location</option>
                                                                <option value="unit_code">Unit Code</option>
                                                            </select>
                                                        </div>
                                                        
                                                  
                        
                                                    </div>
                                                </div>

                                                </div>
                                                </div>

                                                    <table id="datatables" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        
                                                        <thead>
                                                        <tr>
                                                            <th>SN</th>
                                                            <th>Badge</th>
                                                            <th>Name</th>
                                                            <th>Designation</th>
                                                            <th>Location</th>
                                                            <th>Unit Code</th>
                                                            <th>Remarks</th>
                                                            <th>Tools</th>
                                                        </tr>
                                                        </thead>
                
                
                                                        <tbody>
                                                            @foreach ($employees as $employee)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $employee->badge }}</td>
                                                            <td>{{ $employee->name }}</td>
                                                            <td>{{ $employee->designation }}</td>
                                                            <td>{{ $employee->location }}</td>
                                                            <td>{{ $employee->unit_code }}</td>
                                                            <td>{{ $employee->remarks }}</td>
                                                            <td>
                                                                <div class="btn-group btn-group-justified text-white mb-2">
                                                                    
                                                                    <a class="btn btn-primary waves-effect waves-light" role="button" data-toggle="modal" data-target="#info{{ $employee->badge }}"><i class=" fas fa-info"></i></a>
                                                                    <a class="btn btn-warning waves-effect waves-light" role="button" data-toggle="modal" data-target="#editEmp{{ $employee->badge }}"> <i class="  far fa-edit"></i></a>
                                                                    <a class="btn btn-danger waves-effect waves-light" role="button" data-toggle="modal" data-target="#delete{{ $employee->badge }}"> <i class="  fas fa-times"></i></a>
                                                                   
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                   
            
                                        
                                        <div class="col-12 text-center">
                                            <span>{{ $employees->links() }}</span>          
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row -->

                
                        </div> <!-- end container-fluid -->

                    </div> <!-- end content -->

                    @foreach ($employees as $employee)
                    @include('includes.employees.info')
                    @include('includes.employees.edit_delete')
                    @endforeach   

                    @include('includes.employees.add')

@endsection