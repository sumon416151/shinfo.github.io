<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/')}}/img/m.png">
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('public/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('public/admin/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('public/admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('public/admin/vendor/morrisjs/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('public/admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('public/admin/dist/css/bootstrap-responsive.min')}}">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
              @include('admin.includes.header')
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                @include('admin.includes.menu')
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
               @yield('mainContent')
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{asset('public/admin/vendor/jquery/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('public/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('public/admin/vendor/metisMenu/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('public/admin/vendor/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('public/admin/vendor/morrisjs/morris.min.js')}}"></script>
        <script src="{{asset('public/admin/data/morris-data.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{asset('public/admin/dist/js/sb-admin-2.js')}}"></script>

    </body>

</html>
