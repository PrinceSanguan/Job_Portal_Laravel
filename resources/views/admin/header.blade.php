<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- ... (other head elements) ... -->
    <!-- BOOTSTRAP STYLES-->
    <link href="{{ url('asset/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ url('asset/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{ url('asset/css/custom.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <meta charset="utf-8">
    <title>Work From Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0; background-color: #00b074">
            <div class="navbar-header" style="background-color: #00b074">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}" style="background-color: #00b074">FRONTEND</a>
            </div>
            <div id="last-access" style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
                Current Time: <span id="last-access-time">Loading...</span>&nbsp;
                <a href="{{ url('/') }}" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="{{ url('asset/img/find_user.png') }}" class="user-image img-responsive" />
                    </li>

                    <li>
                      <a  href="{{ url('/') }}"><i class="fa fa-desktop fa-3x"></i>Frontend</a>
                  </li>

                  <li>
                    <a  href="{{ url('/admin') }}"><i class="fa fa-table fa-3x"></i>Table</a>
                </li>

                  <li>
                    <a  href="{{ url('/post_a_job') }}"><i class="fa fa-envelope fa-3x"></i>Post a Job</a>
                </li>

                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div id="page-inner" style="min-height: 100vh; overflow: hidden;">
                <div class="row">
                    <div class="col-md-12">
                        <h2>ADMIN</h2>
                        <h5>Welcome! Love to see you back.</h5>
                    </div>
                </div>