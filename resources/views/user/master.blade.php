<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> @yield('title') </title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('dashbord') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('dashbord') }}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('dashbord') }}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('dashbord') }}/vendor/morrisjs/morris.css" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Custom Fonts -->
    <link href="{{ asset('dashbord') }}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

@yield('plug')

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('user.includes.header')
            @include('user.includes.sidebar')
        </nav>

        <div id="wrapper">
        @yield('content')
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('dashbord') }}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('dashbord') }}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('dashbord') }}/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('dashbord') }}/vendor/raphael/raphael.min.js"></script>
    <script src="{{ asset('dashbord') }}/vendor/morrisjs/morris.min.js"></script>
    <script src="{{ asset('dashbord') }}/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dashbord') }}/dist/js/sb-admin-2.js"></script>
    @yield('plugjs')
    
    <script src="{{ asset('dashbord') }}/js/jquery-ui.js"></script>
    <script>
        $(function() {
        $( "#datepicker" ).datepicker({
            dateFormat : 'dd/mm/yy',
            changeMonth : true,
            changeYear : true,
            yearRange: '-28y:c+nn',
            maxDate: '-6y'
        });
    });
    </script>

</body>

</html>
