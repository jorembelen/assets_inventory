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
                                <li class="breadcrumb-item active">Import Assets</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Import Assets</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

     <div class="row">

                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"></h4>            
                                       
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card-box table-responsive">
                                                    <h4 class="header-title"></h4>
              
                                                    <div class="form-group row">
                                                        <div class="col-md-3">
                                                            <form action="{{ route('import.assets') }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                            <input type="file" name="file" class="form-control" required>
                                                            <br>
                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                        </form>
                                                        </div>
                                                   
                                                    </div>

                                        {{-- <table id="datatable" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
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
                                                    <td>{{ $asset->purchased_date}}</td>
                                                    <td>{{ $asset->notes}}</td>
                                                    <td>
                                                        
                                                        @if ( $asset->status == 0 )
                                                        <a href="#checkOut{{ $asset->id}}" data-toggle="modal"><span class="badge badge-success">Assignable</span></a>
                                                        @else
                                                    <a href="/checkOuts"> <span class="badge badge-danger">Assigned</span></a> 
                                                        @endif
                                                    </td>
                                              
                                                </tr>
                                                @endforeach
                                          
                                            </tbody>
                                        </table> --}}
                                    </div>
                                </div>
                            </div> <!-- end row -->

                
                        </div> <!-- end container-fluid -->

                    </div> <!-- end content -->




@endsection