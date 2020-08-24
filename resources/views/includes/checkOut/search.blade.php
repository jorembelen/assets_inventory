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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Asset Management</a></li>
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

                                        <p class="sub-header">
                                            <a href="{{ url('/search/assets' ) }}" type="button" class="btn btn-success btn-rounded width-sm waves-effect waves-light"> <i class="fas fa-arrow-left"></i> Back</a>    
                                        </p>

                                        <h5>{{ $checkOuts->count() }} record(s) found.</h5>
                                        <table id="datatable-buttons" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Type</th>
                                                <th>RITCCO No.</th>
                                                <th>Badge</th>
                                                <th>Name</th>
                                                <th>Location</th>
                                                <th>Unit Code</th>
                                                <th>Description</th>
                                                <th>Serial No.</th>
                                                {{-- <th>Mobile No.</th> --}}
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
                                                    {{-- <td>{{ $checkOut->assets->mobile_number}}</td> --}}
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


                                    </div>
                                </div>
                            </div> <!-- end row -->

                
                        </div> <!-- end container-fluid -->

                    </div> <!-- end content -->


                    @foreach ($checkOuts as $checkOut)
                    @include('includes.checkIn')
                    @include('includes.checkOut.edit')
                    @endforeach

                    {{-- @foreach ($assets as $asset)
                    @include('includes.checkOut')
                    @endforeach --}}

@endsection