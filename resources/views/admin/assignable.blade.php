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
                                       

                                        <table id="datatable" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Type</th>
                                                <th>Description</th>
                                                <th>Serial No.</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                @foreach ($assets as $asset)
                                                {{-- @if ( $asset->status == 0 ) --}}
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $asset->type}}</td>
                                                    <td>{{ $asset->description}}</td>
                                                    <td>{{ $asset->serial_number}}</td>
                                                    <td>
                                                        
                                                        @if ( $asset->status == 0 )
                                                        <a href="#checkOut{{ $asset->id}}" data-toggle="modal"><span class="badge badge-success">Assignable</span></a>
                                                        @else
                                                    <a href="/checkOuts"> <span class="badge badge-warning">Assigned to </span></a> {{ $asset->employees->badge}} - {{ $asset->employees->name}} 
                                                        @endif
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
                    @endforeach



@endsection