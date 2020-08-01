@extends('layouts.main')

@section('content') 




<style type="text/css">
h2 { 
    /* counter-reset: section;  */
    font-size: 35px;
    text-align: center;
    }
    h3 { 
    /* counter-reset: section;  */
    font-size: 25px;
    text-align: center;
    }
    h4 { 
    /* counter-reset: section;  */
    position: fixed;
    bottom: 0;
    font-size: 10px;
    }
    div.previous { 
    /* counter-reset: section;  */
    margin-left: 25px;
    font-size: 15px;
    }
    p.printed {
  /* position: absolute; */
  text-align: right;
  bottom: 0;
  font-size: 10px;
  
}
</style>

<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Asset Management</a></li>
                                <li class="breadcrumb-item active">Issue Form</li>
                            </ol>
                        </div>
                        {{-- <h4 class="page-title">Invoice</h4> --}}
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <div class="clearfix">
                            <div class="float-left mb-2">
                                <img src="assets/images/logo-dark.png" alt="" height="28">
                            </div>
                            <h2>
                                <img src="/admin/assets/images/logo.png" height="60">
                                <strong> Rezayat Company Ltd.</strong> 
                        </h2>  
                        </div>

                        <br><br><br>
               
        <div>
            <h3><strong>IT Department</strong>
                <br>
                <br><strong>EQUIPMENT ISSUE FORM</strong>
            </h3>         

          </div>
        </div>
    </div>
          <br><br><br>
  
        <!-- Table row -->

        <div class="col-lg-12">
            <div class="card-box">
                <div class="table-responsive">

                    <br><br><br>

                    <table id="print" class="table table-bordered mb-0">
                    <thead>
                        <tr>
                                                <th>Type</th>
                                                <th>Description</th>
                                                <th>Serial No.</th>
                                                <th>Mobile No.</th>
                                                <th>Issued Date</th>
                                                <th>Remarks</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                @foreach ($checkOuts as $checkOut)
                                                <tr>
                                                    <td>{{ $checkOut->assets->type}}</td>
                                                    <td>{{ $checkOut->assets->description}}</td>
                                                    <td>{{ $checkOut->assets->serial_number}}</td>
                                                    <td>{{ $checkOut->assets->mobile_number}}</td>
                                                    <td>{!! $checkOut->date_issued->format('M-d-Y') !!}</td>
                                                    <td>{{ $checkOut->notes}}</td>
                          @endforeach
                                                </tr>
                          </tbody>
                </table>
                </div>
            </div>

        </div>
        <div class="box-body">
            <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example_info">
        <div class="row">
          <div class="col-xs-12 table-responsive">
            {{-- <table class="table table-striped"> --}}
              <thead>
              
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
@if($checkOut->badge != '')
        <div class="previous">
          Previous User: <strong>{!! $checkOut->badge !!} - {!! $checkOut->name !!}</strong></p>       
        </div>      
        @endif       
<br><br>
  <hr>

  @if($checkOut->assets->type == 'Mobile Phone')
  <div class="card-box">
    <h5>
        I understand that I received this mobile in complete set without damage and agree to return the same complete personally
     during the clearance process or when required. Any missing accessories will be on my account when returned. I also understand 
     that if I have a mobile allowance, it will be stopped upon receiving this mobile.
    </h5>
  </div>
  @endif  
  <br><br>
          <!-- /.col -->

                  <div class="previous">
                        
                        Issued to: <b> {{$checkOut->employees->name}}</b> <br>
                        Badge No.: <b>{{$checkOut->employees->badge}}</b> <br>
                        Location : <b>{{$checkOut->employees->location}} - {{$checkOut->employees->unit_code}}</b> 
                        <br><br>
                        <b>Signature:</b> __________________
                      </div>
                      
<br><br>
            

        <div class="hidden-print mt-4" style="text-align:center;">
            <div class="text-center d-print-none">
                <a href="javascript:window.print()" class="btn btn-blue waves-effect waves-light"><i class="fa fa-print mr-1"></i> Print</a>
                <a href="/checkOuts" class="btn btn-info waves-effect waves-light">Close</a>
            </div>
        </div>
    </div>

    </div>
  </div>
</div>
</div>


      <script>
            function myFunction() {
              window.print();
            }
            new Date().toLocaleDateString()
             = "9/13/2015"
</script>
       
    <h4>RCL-ITD-FM-01.1 - Version 1.2 Rev. July 2017</h4> 
    <p class="printed">Printed by: {{Auth::user()->name}}</p>   


@endsection