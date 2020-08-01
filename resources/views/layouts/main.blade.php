<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>RCL | Assets</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

        <!-- C3 Chart css -->
        <link href="/admin/assets/libs/c3/c3.min.css" rel="stylesheet" type="text/css" />

          <!-- third party css -->
          <link href="/admin/assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
          <link href="/admin/assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
          <link href="/admin/assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />

          <link href="/admin/assets/libs/custombox/custombox.min.css" rel="stylesheet" type="text/css" >

          <link href="/admin/assets/select2/css/select2.min.css" rel="stylesheet" />

             <!-- App css -->
        <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
          
        <link href="/admin/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <link href="/admin/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

          <!-- Plugins css -->
          <link href="/admin/assets/libs/nestable2/jquery.nestable.min.css" rel="stylesheet" type="text/css" />
          

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">


            @include('includes.navbar')
            
            @include('includes.sidebar')
       

            @yield('content')


        </div>
      

        @include('includes.scripts')

        @yield('script')
        
    </body>

</html>