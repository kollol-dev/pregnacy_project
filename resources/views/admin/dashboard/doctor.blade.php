<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="/admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="/admin/css/theme.css" rel="stylesheet">
        <link type="text/css" href="/admin/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    </head>

<body>

    <!-- header -->
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>
                <a class="brand" href="/">Edmin </a>
                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav pull-right">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
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
                                <a href="/admin/dashboard">
                                    <i class="menu-icon icon-dashboard"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="active" style="font-weight: bold; opacity: 0.7;" href="/admin/dashboard/doctor">
                                    <i class="menu-icon icon-bullhorn"></i>Doctors
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
                    <div class="content">


                        <div class="module">
                            <div class="module-head">
                                <h3>All Doctors</h3>
                            </div>
                            <div class="module-option clearfix">
                                <div class="pull-right">
                                    <button data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="#" class="btn btn-primary">Add Doctor</button>
                                </div>

                                <!-- add modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/admin/dashboard/app/add/doctor" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Name:</label>
                                                        <input type="text" name="name" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Email:</label>
                                                        <input type="email" name="email" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Password:</label>
                                                        <input type="password" name="password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Phone:</label>
                                                        <input type="text" name="phone" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Address:</label>
                                                        <input type="text" name="address" class="form-control">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- add modal end -->

                            </div>
                            <div class="module-body table">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($doctors as $doctor)
                                        <tr>
                                            <td>{{ $doctor->id }}</td>
                                            <td>{{ $doctor->name }}</td>
                                            <td>{{ $doctor->email }}</td>
                                            <td>{{ isset($doctor->phone) ? $doctor->phone : 'N/A' }}</td>
                                            <td>{{ isset($doctor->address) ? $doctor->address : 'N/A' }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/.module-->
                    </div>
                    <!--/.content-->
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

</body>