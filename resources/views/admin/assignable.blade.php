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
                                <li class="breadcrumb-item active">Assignable Assets</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Assignable Assets</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

     <div class="row">

                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"></h4>
                                        <p class="sub-header">
                                            {{-- <button type="button" class="btn btn-primary btn-rounded width-sm waves-effect waves-light" data-toggle="modal" data-target="#add"> <i class="fas fa-plus"></i> Add</button> --}}
                                          </p>               
                                       
                                          <h5>{{ $assets->count() }} record(s) found.</h5>
                                        <table id="datatable-buttons" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>RITCCO</th>
                                                <th>Description</th>
                                                <th>Serial No.</th>
                                                <th>Remarks</th>
                                                <th>Status</th>
                                                <th>Tools</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                @foreach ($assets as $asset)
                                                {{-- @if ( $asset->status == 0 ) --}}
                                                <tr>
                                                    <td>{{ $asset->id }}</td>
                                                    <td>{{ $asset->type}}</td>
                                                    <td>{{ $asset->ritcco}}</td>
                                                    <td>{{ $asset->description}}</td>
                                                    <td>{{ $asset->serial_number}}</td>
                                                    <td>{{ $asset->remarks}}</td>
                                                    <td>
                                                        
                                                        @if ( $asset->status == 0 )
                                                        <a href="#checkOut{{ $asset->id}}" data-toggle="modal"><span class="badge badge-success">Assignable</span></a>
                                                        @else
                                                    <a href="/checkOuts"> <span class="badge badge-warning">Assigned to </span></a> {{ $asset->employees->badge}} - {{ $asset->employees->name}} 
                                                        @endif
                                                    </td>

                                                    <td>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-blue dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down"></i> </button>
                                                            <div class="dropdown-menu">

                                                                <a class="btn btn-outline-success btn-rounded waves-effect width-md waves-light" role="button" data-toggle="modal" data-target="#previous{{ $asset->id }}"> <i class="  fas fa-info"></i> Info</a>
                                                               
                                                            </div>
                                                        </div>

                                                    </td>
                                                
                                                </tr>
                                                {{-- @endif --}}
                                                @endforeach
                                          
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->

                
                        </div> <!-- end container-fluid -->

                    </div> <!-- end content -->



                    @foreach ($assets as $asset)
                    @include('includes.checkOut')
                    @include('includes.assets.info_prev')
                    @endforeach



@endsection