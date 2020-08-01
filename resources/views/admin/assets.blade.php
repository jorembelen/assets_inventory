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
                                <li class="breadcrumb-item active">Assets List</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Assets List</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

     <div class="row">

                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"></h4>
                                        <p class="sub-header">
                                            <button type="button" class="btn btn-success btn-rounded width-sm waves-effect waves-light" data-toggle="modal" data-target="#add"> <i class="fas fa-laptop-medical"></i> Add</button>
                                          </p>               
                                       

                                        <table id="datatable-buttons" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
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
                                                @foreach ($assets as $asset)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $asset->ritcco}}</td>
                                                    <td>{{ $asset->type}}</td>
                                                    <td>{{ $asset->description}}</td>
                                                    <td>{{ $asset->serial_number}}</td>
                                                    <td>{{ $asset->mobile_number}}</td>
                                                    <td>{{ $asset->asset_number}}</td>
                                                    <td>{{ $asset->date_purchased}}</td>
                                                    <td>{{ $asset->notes}}</td>
                                                    <td>
                                                        
                                                        @if ( $asset->status == 0 )
                                                        <a href="#checkOut{{ $asset->id}}" data-toggle="modal"><span class="badge badge-success">Assignable</span></a>
                                                        @else
                                                    <a href="/checkOuts"> <span class="badge badge-danger">Assigned</span></a> 
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="btn-group btn-group-justified text-white mb-2">
                                                            @if ( $asset->status == 1 )
                                                            <a class="btn btn-primary waves-effect waves-light" role="button" data-toggle="modal" data-target="#asset{{ $asset->id }}"><i class="  fas fa-info"></i></a>
                                                            <a class="btn btn-warning waves-effect waves-light" role="button" data-toggle="modal" data-target="#edit{{ $asset->id }}"> <i class="  far fa-edit"></i></a>
                                                            @else
                                                            <a class="btn btn-primary waves-effect waves-light" role="button" data-toggle="modal" data-target="#asset{{ $asset->id }}"><i class="  fas fa-info"></i></a>
                                                            <a class="btn btn-warning waves-effect waves-light" role="button" data-toggle="modal" data-target="#edit{{ $asset->id }}"> <i class="  far fa-edit"></i></a>
                                                            <a class="btn btn-danger waves-effect waves-light" role="button" data-toggle="modal" data-target="#delete{{ $asset->id }}"> <i class="  fas fa-times"></i></a>
                                                            @endif
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



                    @foreach ($assets as $asset)
                    @include('includes.checkOut')
                    @include('includes.assets.info')
                    @include('includes.assets.edit_delete')
                    @endforeach

                    @include('includes.assets.add')


@endsection