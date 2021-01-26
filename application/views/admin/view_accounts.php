<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CPU| Faculty</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <div class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url('index.php/page/user') ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">CPU</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>CPU</b> Faculty</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>/assets/theme/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $this->session->userdata('username'); ?></span>
                            </a>
                            <ul class="dropdown-menu" style="width: 150px">

                                <li><a href="<?php echo base_url('index.php/page/profile') ?>">
                                        <h4><i class="glyphicon glyphicon-user"></i> Profile</h4>
                                    </a></li>
                                <li><a href="<?php echo base_url('index.php/login/logout') ?>">
                                        <h4><i class="glyphicon glyphicon-log-out"></i> Log out</h4>
                                    </a></li>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">
                        <h4 class="text-center"><?php echo $this->session->userdata('department') ?></h4>
                    </li><br>
                    <!-- Optionally, you can add icons to the links -->
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i><span>Home</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-file"></i>
                            <span>Form</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i>Edit Purchase Order</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i>Accomplishment Report</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i>Requisition Form</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="box box-default">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-3 col-xs-8">
                                <h4>Select College/Department</h4>
                                <select name="department" id="department" class="form-control">
                                    <option value="">Select Department</option>
                                    <?php foreach ($departments as $department) : ?>
                                        <option value="<?php echo $department->deptName; ?>" <?php if ($dept_choice == $department->deptName) echo "selected"; ?>><?php echo $department->deptName; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <br><br>
                                <button type="submit" class="btn btn-default">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                            <div class="col-lg-3">
                                <br><br>
                                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                            </div>
                        </div>

                        <br>
                        <table class="table" id="sorting">
                            <thead>
                                <tr>
                                    <th style="width: 25%">
                                        <h4>ID-Number</h4>
                                    </th>
                                    <th style="width: 25%">
                                        <h4>Name</h4>
                                    </th>
                                    <th style="width: 25%">
                                        <h4>Department</h4>
                                    </th>
                                    <th style="width: 25%">
                                        <h4></h4>
                                    </th>
                                </tr>
                            </thead>

                            <tbody id="myTable">
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td><?php echo $user->userID; ?></td>
                                        <td><?php echo $user->username; ?></td>
                                        <td><?php echo $user->department; ?></td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#view_details<?php echo $user->userID; ?>">
                                                <i class="ionicons ion-edit"></i> Update
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="view_details<?php echo $user->userID; ?>" tabindex="-1" role="dialog" aria-labelledby="view_detailsLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <?php echo form_open('admin/update_user'); ?>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <h4>Username:</h4>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <input type="text" value="<?php echo $user->username; ?>" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>

                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <h4>Password</h4>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <input type="password" id="pass" name="pass" value="<?php echo $user->pass; ?>" class="form-control"><br />
                                                                    <input type="checkbox" onclick="myFunction()">Show Password
                                                                </div>
                                                            </div>
                                                            <br>

                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <h4>Email Address:</h4>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <input type="text" value="<?php echo $user->email; ?>" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>

                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <h4>Department:</h4>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <select name="dept" class="form-control">
                                                                        <?php foreach ($departments as $dept) : ?>
                                                                            <option value="<?php echo $dept->deptName ?>" <?php if ($dept->deptName == $user->department) echo "selected"; ?>><?php echo $dept->deptName; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <br>

                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <h4>Role/Position:</h4>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <select class="form-control">
                                                                        <option <?php if ($user->role == "Faculty") echo "selected"; ?>>
                                                                            <h4>Faculty</h4>
                                                                        </option>
                                                                        <option <?php if ($user->role == "Dean") echo "selected"; ?>>
                                                                            <h4>Dean</h4>
                                                                        </option>
                                                                        <option <?php if ($user->role == "Officer") echo "selected"; ?>>
                                                                            <h4>Officer</h4>
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <br>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">
                                                                <i class="glyphicon glyphicon-save"></i> Save changes</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <div class="box-footer">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUser">
                                <i class="glyphicon glyphicon-plus"></i> Add User
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php echo form_open('admin/add_user'); ?>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <h4>Username:</h4>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="username" class="form-control" placeholder="Enter Username">
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <h4>Password</h4>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="password" id="pass" name="pass" placeholder="Enter Password" class="form-control"><br />
                                                    <input type="checkbox" onclick="myFunction()">Show Password
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <h4>Email Address:</h4>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="email" class="form-control" placeholder="Enter Email Address">
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <h4>Department:</h4>
                                                </div>
                                                <div class="col-lg-6">
                                                    <select name="department" class="form-control">
                                                        <?php foreach ($departments as $dept) : ?>
                                                            <option value="<?php echo $dept->deptName ?>"><?php echo $dept->deptName; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <h4>Role/Position:</h4>
                                                </div>
                                                <div class="col-lg-6">
                                                    <select name="role" class="form-control">
                                                        <option value="Faculty">
                                                            <h4>Faculty</h4>
                                                        </option>
                                                        <option value="Dean">
                                                            <h4>Dean</h4>
                                                        </option>
                                                        <option value="Officer">
                                                            <h4>Officer</h4>
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">
                                                <i class="glyphicon glyphicon-save"></i>Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function myFunction() {
                        var x = document.getElementById("pass");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- Default to the left -->
            <strong>Copyright &copy; 2016 <a href="#">Thesis Group</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">

        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url(); ?>/assets/theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url(); ?>/assets/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>/assets/theme/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>/assets/theme/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>/assets/theme/dist/js/demo.js"></script>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(function() {
            $('#sorting').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': false,
                'ordering': true,
                'info': false,
                'autoWidth': false
            })
        })
    </script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>