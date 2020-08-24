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
                                        <h4 class="header-title"></h4>
                                        <p class="sub-header">
                                            
                                            <form action="{{route('print.select')}}" method="POST">
                                                @csrf
                                                <a href="{{ url('/checkOuts' ) }}" class="btn btn-warning waves-effect waves-light btn-sm"><i class="fas fa-arrow-left"></i> Back</a>
                                                <button class="btn btn-success waves-effect waves-light btn-sm"><i class="fe-printer"></i> Print</button>
                                         
                                          </p>  

                                      
                                        <table id="datatables" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                               <th>Select</th>
                                                <th>SN</th>
                                                <th>Type</th>
                                                <th>Badge</th>
                                                <th>Name</th>
                                                <th>Location</th>
                                                <th>Description</th>
                                                <th>Serial No.</th>
                                                <th>Transaction Date</th>
                                                <th>Remarks</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                @foreach ($checkOuts as $checkOut)

                                                <tr>
                                                  <td><input id="checkbox" type="checkbox" name="checkbox[]" value="{{ $checkOut->id }}"></td>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $checkOut->assets->type}}</td>
                                                    <td>{{ $checkOut->employees->badge}}</td>
                                                    <td>{{ $checkOut->employees->name}}</td>
                                                    <td>{{ $checkOut->employees->location}}</td>
                                                    <td>{{ $checkOut->assets->description}}</td>
                                                    <td>{{ $checkOut->assets->serial_number}}</td>
                                                    <td>{{ $checkOut->date_issued->format('M-d-Y')}}</td>
                                                    <td>{{ $checkOut->notes}}</td>
                                                </tr>
                                                @endforeach
                                            </form>
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

                    

@endsection