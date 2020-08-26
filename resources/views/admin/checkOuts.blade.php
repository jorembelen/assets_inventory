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
                                <li class="breadcrumb-item"><a href="/home#!">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/search/assets#!">Asset Management</a></li>
                                <li class="breadcrumb-item active">Assigned Assets</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Assigned Assets</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

     <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">

                                        <div class="mb-3">
                                            <form action="{{route('search.assigned')}}" method="POST">
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
                                                                <option value="emp_id">Badge Number</option>
                                                            </select>
                                                        </div>
                                                        
                                                  
                        
                                                    </div>
                                                </div>

                                                </div>
                                                </div>

                                        <table id="datatable-button" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Type</th>
                                                <th>RITCCO</th>
                                                <th>Badge</th>
                                                <th>Name</th>
                                                <th>Location</th>
                                                <th>Unit Code</th>
                                                <th>Description</th>
                                                <th>Serial No.</th>
                                                <th>Mobile No.</th>
                                                <th>Date</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                @foreach ($checkOuts as $checkOut)

                                                <tr>
                                                    
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $checkOut->assets->type}}</td>
                                                    <td>{{ $checkOut->assets->ritcco}}</td>
                                                    <td>{{ $checkOut->employees->badge}}</td>
                                                    <td>{{ $checkOut->employees->name}}</td>
                                                    <td>{{ $checkOut->employees->location}}</td>
                                                    <td>{{ $checkOut->employees->unit_code}}</td>
                                                    <td>{{ $checkOut->assets->description}}</td>
                                                    <td>{{ $checkOut->assets->serial_number}}</td>
                                                    <td>{{ $checkOut->assets->mobile_number}}</td>
                                                    <td>{{ $checkOut->date_issued->format('M-d-Y')}}</td>
                                                    <td>{{ $checkOut->notes}}</td>
                                                   <td>
                                                    
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-blue dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <button type="button" class="btn btn-outline-primary btn-rounded waves-effect width-md waves-light" data-toggle="modal" data-target="#edit{{ $checkOut->id }}"><i class="fas fa-edit"></i> Update</button>
                                                            <button type="button" class="btn btn-outline-warning btn-rounded waves-effect width-md waves-light" data-toggle="modal" data-target="#checkIn{{ $checkOut->id }}"><i class="far fa-arrow-alt-circle-left"></i> Return</button>
                                                           <a type="button" class="btn btn-outline-success btn-rounded waves-effect width-md waves-light" href="{{ route('issue.form', $checkOut->id) }}"><i class="fe-printer"></i> Selected Asset</a>
                                                            <a type="button" class="btn btn-outline-danger btn-rounded waves-effect width-md waves-light" href="{{ route('multi.select', $checkOut->emp_id) }}"><i class="fe-printer"></i> Multiple Assets</a>
                                                        </div>
                                                    </div>
                                                  
                                               </td>

                                                </tr>
                                                @endforeach
                                          
                                            </tbody>
                                        </table>

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                {{ $checkOuts->links() }}
                                            </ul>
                                        </nav>

                                    </div>
                                </div>
                            </div> <!-- end row -->

                
                        </div> <!-- end container-fluid -->

                    </div> <!-- end content -->


                    @foreach ($checkOuts as $checkOut)
                    @include('includes.checkIn')
                    @include('includes.checkOut.edit')
                    @endforeach

@endsection