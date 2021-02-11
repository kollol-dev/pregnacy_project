<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link type="text/css" href="/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="/admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="/admin/css/theme.css" rel="stylesheet">
        <link type="text/css" href="/admin/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

        @yield('stylesheets')
    </head>

<body>

    <!-- header -->
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i></a><a class="brand" href="/">Admin </a>
                <div class="nav-collapse collapse navbar-inverse-collapse">

                    <ul class="nav pull-right">
                        <li><a href="/logout">Logout </a></li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- header end -->



    <div class="wrapper">

        <div class="container">
            <div class="row">

                <!-- sidebar -->
                <div class="span3">
                    <div class="sidebar">
                        <ul class="widget widget-menu unstyled">
                            <li>
                                <a class="{{ Request::is('admin/dashboard') ? 'active' : '' }}" href="/admin/dashboard">
                                    <i class="menu-icon icon-dashboard"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="{{ Request::is('admin/dashboard/doctor') ? 'active' : '' }}"  href="{{ route('admin.dashboard.doctor') }}">
                                    <i class="menu-icon icon-bullhorn"></i>Doctors
                                </a>
                            </li>
                            <li>
                                <a class="{{ Request::is('admin/patient') ? 'active' : '' }}"  href="/admin/patient">
                                    <i class="menu-icon icon-bullhorn"></i>Patients
                                </a>
                            </li>
                            <li>
                                <a class="{{ Request::is('admin/dashboard/patient_services') ? 'active' : '' }}"  href="/admin/dashboard/patient_services">
                                    <i class="menu-icon icon-bullhorn"></i>Patient Services
                                </a>
                            </li>
                            <li>
                                <a class="{{ Request::is('admin/blog
                                ') ? 'active' : '' }}"  href="/admin/blog
                                ">
                                    <i class="menu-icon icon-bullhorn"></i>Blogs
                                </a>
                            </li>
                            <!-- <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                        11</b> </a></li>
                            <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                        19</b> </a></li> -->
                        </ul>
                        <!--/.widget-nav-->


                        <!-- <ul class="widget widget-menu unstyled">
                            <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                            <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                            <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                            <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                            <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                        </ul>
                        <ul class="widget widget-menu unstyled">
                            <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                    </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                    </i>More Pages </a>
                                <ul id="togglePages" class="collapse unstyled">
                                    <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                    <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                    <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                        </ul> -->
                    </div>
                    <!--/.sidebar-->
                </div>
                <!-- sidebar end -->

                <!-- content-->
                <div class="span9">
                    @yield('content')
                </div>
                <!-- content end -->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
    <script src="/admin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="/admin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/admin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="/admin/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="/admin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/admin/scripts/common.js" type="text/javascript"></script>

    @yield('page_scripts')

</body>
