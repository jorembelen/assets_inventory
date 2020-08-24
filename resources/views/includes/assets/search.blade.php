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
                                <li class="breadcrumb-item active">Search Result</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Search Result</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title"></h4>
                        <p class="sub-header">
                            <a href="{{ url('/search/assets' ) }}" type="button" class="btn btn-success btn-rounded width-sm waves-effect waves-light"> <i class="fas fa-arrow-left"></i> Back</a>    
                        </p>

                        <h5>{{ $data->count() }} record(s) found.</h5>
                                        <table id="datatable" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Ritcco No.</th>
                                                <th>Type</th>
                                                <th>Description</th>
                                                <th>Serial No.</th>
                                                <th>Mobile No.</th>
                                                <th>Asset No.</th>
                                                <th>Purchased Date</th>
                                                <th>Remarks</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                @foreach ($data as $asset)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $asset->ritcco}}</td>
                                                    <td>{{ $asset->type}}</td>
                                                    <td>{{ $asset->description}}</td>
                                                    <td>{{ $asset->serial_number}}</td>
                                                    <td>{{ $asset->mobile_number}}</td>
                                                    <td>{{ $asset->asset_number}}</td>
                                                    <td>{{ $asset->purchased_date ? $asset->purchased_date->format('M-d-Y') : null }}</td>
                                                    <td>{{ $asset->remarks}}</td>
                                                    <td>
                                                        
                                                        @if ( $asset->status == 0 )
                                                        <a href="#checkOut{{ $asset->id}}" data-toggle="modal"><span class="badge badge-success">Assignable</span></a>
                                                        @elseif ( $asset->status == 1 )
                                                    <a href="{{ route('assigned', $asset->id) }}"> <span class="badge badge-blue">Assigned to {{ $asset->emp_id}}</a>
                                                        @else
                                                        <a href="/scrap#!"> <span class="badge badge-danger">Scrap</a>  
                                                        @endif

                                                    </td>
                                                    <td>
                                                       
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down"></i> </button>
                                                            <div class="dropdown-menu">

                                                                @if ( $asset->status == 1 )
                                                                <a class="btn btn-outline-primary btn-rounded waves-effect width-md waves-light" role="button" data-toggle="modal" data-target="#asset{{ $asset->id }}"><i class="  fas fa-info"></i> Info</a>
                                                                <a class="btn btn-outline-warning btn-rounded waves-effect width-md waves-light" role="button" data-toggle="modal" data-target="#edit{{ $asset->id }}"> <i class="  far fa-edit"></i> Update</a>
                                                                @else
                                                                <a class="btn btn-outline-primary btn-rounded waves-effect width-md waves-light" role="button" data-toggle="modal" data-target="#previous{{ $asset->id }}"><i class="  fas fa-info"></i> Info</a>
                                                                <a class="btn btn-outline-warning btn-rounded waves-effect width-md waves-light" role="button" data-toggle="modal" data-target="#edit{{ $asset->id }}"> <i class="  far fa-edit"></i> Update</a>
                                                                <a class="btn btn-outline-danger btn-rounded waves-effect width-md waves-light" role="button" data-toggle="modal" data-target="#delete{{ $asset->id }}"> <i class="fas fa-trash-alt"></i> Delete</a>
                                                                <a class="btn btn-outline-danger btn-rounded waves-effect width-md waves-light" role="button" data-toggle="modal" data-target="#scrap{{ $asset->id }}"> <i class=" fas fa-hammer"></i> Scrap</a>
                                                                @endif
                                                               
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


                    @foreach ($data as $asset)
                    @include('includes.checkOut')
                    @include('includes.assets.info')
                    @include('includes.assets.edit_delete')
                    @include('includes.assets.trash')
                    @include('includes.assets.info_prev')
                    @endforeach

@endsection