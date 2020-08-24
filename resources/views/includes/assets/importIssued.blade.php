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
                                <li class="breadcrumb-item active">Import Issued Assets</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Import Issued Assets</h4>
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
                                                            <form action="{{ route('import.checkOut') }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                            <input type="file" name="file" class="form-control" required>
                                                            <br>
                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                        </form>
                                                        </div>
                                                   
                                                    </div>

                                 
                                    </div>
                                </div>
                            </div> <!-- end row -->

                
                        </div> <!-- end container-fluid -->

                    </div> <!-- end content -->




@endsection