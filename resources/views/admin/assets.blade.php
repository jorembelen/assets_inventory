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
            
              
                                                    <div class="mb-3">
                                                        <form action="{{route('search.assets')}}" method="POST">
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
                                                                            <option value="serial_number">Serial Number</option>
                                                                            <option value="emp_id">Badge Number</option>
                                                                            <option value="type">Type</option>
                                                                            <option value="ritcco">Ritcco Number</option>
                                                                            <option value="description">Description</option>
                                                                            <option value="mobile_number">Mobile Number</option>
                                                                        </select>
                                                                    </div>
                                                                    
                                                              
                                    
                                                                </div>
                                                            </div>
            
                                                            </div>
                                                            </div>

                                        <table id="datatables" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>RITCCO</th>
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
                                                    <td>{{ $asset->id }}</td>
                                                    <td>{{ $asset->type}}</td>
                                                    <td>{{ $asset->ritcco}}</td>
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
                                                        <a href="{{ route('assigned', $asset->id) }}"> <span class="badge badge-primary">Assigned to {{ $asset->emp_id}}</a>
                                                        @else
                                                        <a href="/scrap#!"> <span class="badge badge-danger">Scrap</a>  
                                                        @endif
                                                    </td>
                                                   
                                                    <td>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-blue dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down"></i> </button>
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

                                        <nav aria-label="Page navigation example">
                                           
                                            <ul class="pagination justify-content-center">
                                                {{ $assets->links() }}
                                            </ul>
                                        </nav>

                                    </div>
                                </div>
                            </div> <!-- end row -->

                
                        </div> <!-- end container-fluid -->

                    </div> <!-- end content -->



                    @foreach ($assets as $asset)
                    @include('includes.checkOut')
                    @include('includes.assets.info')
                    @include('includes.assets.edit_delete')
                    @include('includes.assets.trash')
                    @include('includes.assets.info_prev')
                    @endforeach

                    @include('includes.assets.add')


@endsection