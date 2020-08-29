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
                                <li class="breadcrumb-item"><a href="/search/assets#!">User Management</a></li>
                                <li class="breadcrumb-item active">Users List</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Users List</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

     <div class="row">

                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"></h4>
                                    @if ( Auth()->user()->role == 1 )
                                        <p class="sub-header">
                                            <button type="button" class="btn btn-success btn-rounded width-sm waves-effect waves-light" data-toggle="modal" data-target="#add"> <i class="fas fa-user-plus"></i> Add</button>
                                        </p>    
                                    @endif

                                        <table id="datatable" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Name</th>
                                                <th>UserName</th>
                                                <th>Role</th>
                                                <th>Member Since</th>
                                                @if ( Auth()->user()->role == 1 )
                                                <th>Action</th>
                                                @endif
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $user->name}}</td>
                                                    <td>{{ $user->username}}</td>
                                                    <td>
                                                    @if ( $user->role == 0 )
                                                    User
                                                    @else
                                                    Admin
                                                    @endif
                                                    </td>
                                                    <td>{{ $user->created_at ? $user->created_at->format('M-d-Y') : null }}</td>

                                                    @if ( Auth()->user()->role == 1 )
                                                    <td>

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-blue dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down"></i> </button>
                                                            <div class="dropdown-menu">
                                                            <a class="btn btn-outline-warning btn-rounded waves-effect width-md waves-light" role="button" data-toggle="modal" data-target="#edit{{ $user->id }}"> <i class="  far fa-edit"></i> Update</a>
                                                                <a class="btn btn-outline-danger btn-rounded waves-effect width-md waves-light" role="button" data-toggle="modal" data-target="#delete{{ $user->id }}"> <i class="fas fa-trash-alt"></i> Delete</a>
                                                               
                                                            </div>
                                                        </div>

                                                    </td>
                                                    @endif

                                                </tr>
                                                @endforeach
                                          
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end row -->

                
                        </div> <!-- end container-fluid -->

                    </div> <!-- end content -->



                    @foreach ($users as $user)
                    @include('includes.users.edit_delete')
                    @endforeach

                    @include('includes.users.add')


@endsection