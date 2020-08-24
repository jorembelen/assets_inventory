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
                                <li class="breadcrumb-item active">Import Employees</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Import Employees</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

     <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"></h4>
  
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <input type="file" name="file" class="form-control" required>
                                                <br>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </form>
                                            </div>
                                       
                                        </div>

                                                    {{-- <table id="datatables" class="table m-0 table-colored-bordered table-bordered-blue" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        
                                                        <thead>
                                                        <tr>
                                                            <th>SN</th>
                                                            <th>Badge</th>
                                                            <th>Name</th>
                                                            <th>Designation</th>
                                                            <th>Location</th>
                                                            <th>Unit Code</th>
                                                            <th>Remarks</th>
                                                            <th>Tools</th>
                                                        </tr>
                                                        </thead>
                
                
                                                        <tbody>
                                                            @foreach ($employees as $employee)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $employee->badge }}</td>
                                                            <td>{{ $employee->name }}</td>
                                                            <td>{{ $employee->designation }}</td>
                                                            <td>{{ $employee->location }}</td>
                                                            <td>{{ $employee->unit_code }}</td>
                                                            <td>{{ $employee->remarks }}</td>
                                                            <td>
                                                                <div class="btn-group btn-group-justified text-white mb-2">
                                                                    
                                                                    <a class="btn btn-primary waves-effect waves-light" role="button" data-toggle="modal" data-target="#info{{ $employee->badge }}"><i class=" fas fa-info"></i></a>
                                                                    <a class="btn btn-warning waves-effect waves-light" role="button" data-toggle="modal" data-target="#editEmp{{ $employee->badge }}"> <i class="  far fa-edit"></i></a>
                                                                    <a class="btn btn-danger waves-effect waves-light" role="button" data-toggle="modal" data-target="#delete{{ $employee->badge }}"> <i class="  fas fa-times"></i></a>
                                                                   
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                   
            
                                        
                                        <div class="col-12 text-center">
                                            <span>{{ $employees->links() }}</span>          
                                        </div> --}}
                                    </div>
                                </div>
                            </div> <!-- end row -->

                
                        </div> <!-- end container-fluid -->

                    </div> <!-- end content -->

                    @foreach ($employees as $employee)
                    @include('includes.employees.info')
                    @include('includes.employees.edit_delete')
                    @endforeach   

                    @include('includes.employees.add')

@endsection