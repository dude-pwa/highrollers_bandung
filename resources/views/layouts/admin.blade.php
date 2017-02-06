<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Highrollers Bandung</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('src/admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('src/admin/css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('src/admin/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('src/admin/css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('src/admin/css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('src/admin/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="{{ asset('src/admin/js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('src/admin/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('src/admin/js/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('src/admin/js/startmin.js') }}"></script>
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        @include('../shared.admin_nav')

        <!-- Sidebar -->
        <br>
        @include('../shared.admin_sidebar')

    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    @if(Session::has('message'))
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @elseif(Session::has('error'))
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                    @endif

                    <script>
                        $('div.alert').delay(25000).slideUp(300);
                        $(".delete").on("submit", function(){
                            return confirm("Are you sure?");
                        });

                        $(".close").click(function(){
                            $('.alert').hide();
                            $(this).hide();
                        });
                    </script>
                    @yield('content')
                </div>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>
</body>
</html>
