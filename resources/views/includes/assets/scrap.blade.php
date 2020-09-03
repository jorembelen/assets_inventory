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
                                <li class="breadcrumb-item active">Scrap Assets</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Scrap Assets</h4>
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
                                        <table id="datatable" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Type</th>
                                                <th>RITCCO No.</th>
                                                <th>Description</th>
                                                <th>Serial No.</th>
                                                <th>Mobile No.</th>
                                                <!-- <th>Image</th> -->
                                                <th>Remarks</th>
                                                <th>Status</th>
                                                <th>Tools</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                @foreach ($assets as $asset)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $asset->type}}</td>
                                                    <td>{{ $asset->ritcco}}</td>
                                                    <td>{{ $asset->description}}</td>
                                                    <td>{{ $asset->serial_number}}</td>
                                                    <td>{{ $asset->mobile_number}}</td>
                                                    <!-- <td>
                                                    <a target="_blank" href="{{url('../')}}/images/uploads/{{ $asset->image ? $asset->image : 'no_image.jpg'}}"><img src="{{url('../')}}/images/uploads/{{ $asset->image ? $asset->image : 'no_image.jpg'}}"  width="50px;" height="40px;" alt="No Image"></a>
                                                    </td> -->
                                                    <td>{{ $asset->remarks}}</td>
                                                    <td>
                                                        <a href="#" data-toggle="modal"><span class="badge badge-danger">Scrap</span></a>
                                                    </td>
                                                    <td>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-blue dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down"></i> </button>
                                                            <div class="dropdown-menu">

                                                                <a class="btn btn-outline-primary btn-rounded waves-effect width-md waves-light" role="button" data-toggle="modal" data-target="#previous{{ $asset->id }}"> <i class="  fas fa-info"></i> Info</a>
                                                                <a class="btn btn-outline-warning btn-rounded waves-effect width-md waves-light" role="button" data-toggle="modal" data-target="#edit{{ $asset->id }}"> <i class="  far fa-edit"></i> Update</a>
                                                                <a class="btn btn-outline-success btn-rounded waves-effect width-md waves-light" role="button" data-toggle="modal" data-target="#restore{{ $asset->id }}"> <i class="  fas fa-trash-restore"></i> Restore</a>
                                                               
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


                    @foreach ($assets as $asset)
                    @include('includes.assets.restore')
                    @include('includes.assets.info_prev')
                    @include('includes.assets.edit_delete')
                    @endforeach
                    


@endsection