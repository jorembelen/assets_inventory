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
                                <li class="breadcrumb-item active">Update Assets History</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Update Assets History</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

     <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">

                                        <p class="sub-header">
                                            <a href="{{ url('/history' ) }}" type="button" class="btn btn-success btn-rounded width-sm waves-effect waves-light"> <i class="fas fa-arrow-left"></i> Back</a>    
                                        </p>

                       
                                        <table id="datatable-button" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Type</th>
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
                                                        <button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <button type="button" class="btn btn-outline-primary btn-rounded waves-effect width-md waves-light" data-toggle="modal" data-target="#editHistory{{ $checkOut->id }}"><i class="fas fa-edit"></i> Update</button>
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
                    @include('includes.checkOut.editHistory')
                    @endforeach

                    {{-- @foreach ($assets as $asset)
                    @include('includes.checkOut')
                    @endforeach --}}

@endsection