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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Reports</a></li>
                                <li class="breadcrumb-item active">Active Assets</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Active Assets</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

     <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        {{-- <h4 class="header-title">Default Example</h4>
                                        <p class="sub-header">
                                            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.
                                        </p> --}}
                                        <h5>{{ $checkOuts->count() }} record(s) found.</h5>
                                        <table id="datatable-buttons" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Type</th>
                                                <th>RITCCO No.</th>
                                                <th>Badge</th>
                                                <th>Name</th>
                                                {{-- <th>Designation</th> --}}
                                                <th>Location</th>
                                                <th>UnitCode</th>
                                                <th>Description</th>
                                                <th>Serial No.</th>
                                                <th>Mobile No.</th>
                                                <th>Date</th>
                                                <th>Remarks</th>
                                                <th>Status</th>
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
                                                    {{-- <td>{{ $checkOut->employees->designation}}</td> --}}
                                                    <td>{{ $checkOut->employees->location}}</td>
                                                    <td>{{ $checkOut->employees->unit_code}}</td>
                                                    <td>{{ $checkOut->assets->description}}</td>
                                                    <td>{{ $checkOut->assets->serial_number}}</td>
                                                    <td>{{ $checkOut->assets->mobile_number}}</td>
                                                    <td>{{ $checkOut->date_issued->format('M-d-Y')}}</td>
                                                    <td>{{ $checkOut->notes}}</td>
                                                   
                                                    <td>
                                                        @if ( $checkOut->status == 1 )
                                                        <a href="{{ route('assigned', $checkOut->assets->id) }}"> <span class="badge badge-success">Active</a>
                                                        @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                        @endif
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
                    @endforeach

                    {{-- @foreach ($assets as $asset)
                    @include('includes.checkOut')
                    @endforeach --}}

@endsection