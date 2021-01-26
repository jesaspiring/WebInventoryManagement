<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CPU | Custodian Property</title>
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
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/plugins/iCheck/all.css">
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
        <header class="main-header">

            <!-- Logo -->
            <a href="<?php echo base_url('index.php/page/propertyCust'); ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">CPU</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>CPU</b>Custodian</span>
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
                                <span class="hidden-xs">Jesiah Aguilar</span>
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
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">


                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">
                        <h4 class="text-center"><?php echo $this->session->userdata('department') ?></h4>
                    </li><br>
                    <li><a href="<?php echo base_url('index.php/page/propertyCust'); ?>"><i class="glyphicon glyphicon-home"></i><span> Home</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-list-alt"></i> <span>Inventory</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PropertyCust/showDepartment'); ?>"><i class="fa fa-circle-o"></i> View Inventory</a></li>
                            <li><a href="<?php echo base_url('index.php/PropertyCust/physicalCount'); ?>"><i class="fa fa-circle-o"></i> Physical Count</a></li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> <span>History</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('index.php/PropertyCust/displayRecentItems'); ?>"><i class="fa fa-circle-o"></i>Recently Added Items</a></li>
                                    <li><a href="<?php echo base_url('index.php/PropertyCust/displayRepairHistory'); ?>"><i class="fa fa-circle-o"></i>Repair History</a></li>
                                    <li><a href="<?php echo base_url('index.php/PropertyCust/displayTransferHistory'); ?>"><i class="fa fa-circle-o"></i>Transfer History</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/PropertyCust/view_rr'); ?>"><i class="ionicons ion-ios-paper-outline"></i><span> Receiving Report</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="ionicons ion-ios-box-outline"></i> <span>Purchase Order</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                <span class="pull-right-container">
                                    <span class="label label-primary pull-right"><?php echo $request_count; ?></span>
                                </span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PropertyCust/incoming_items'); ?>"><i class="fa fa-circle-o"></i> <span>Incoming P.O</span>
                                    <span class="pull-right-container">
                                        <span class="label label-primary pull-right"><?php echo $request_count; ?></span>
                                    </span>
                                </a></li>
                            <li><a href="<?php echo base_url('index.php/PropertyCust/pending_po'); ?>"><i class="fa fa-circle-o"></i> <span>Pending P.O</span></a></li>
                            <li><a href="<?php echo base_url('index.php/PropertyCust/recently_added'); ?>"><i class="fa fa-circle-o"></i> <span>Recently Added Orders</span></a></li>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 5%">
                                        <h4></h4>
                                    </th>
                                    <th style="width: 14%" class="text-center">
                                        <h4>Quantity</h4>
                                    </th>
                                    <th style="width: 14%" class="text-center">
                                        <h4>Item</h4>
                                    </th>
                                    <th style="width: 14%" class="text-center">
                                        <h4>Brand</h4>
                                    </th>
                                    <th style="width: 20%" class="text-center">
                                        <h4>Description</h4>
                                    </th>
                                    <th style="width: 14%" class="text-center">
                                        <h4>Control #</h4>
                                    </th>
                                    <th style="width: 14%" class="text-center">
                                        <h4>Serial #</h4>
                                    </th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1;
                                foreach ($item_transfer as $it) :
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" name="select[]" value="<?php echo $it->itemID; ?>"></td>
                                        <td><?php echo $it->quantity; ?></td>
                                        <td><?php echo $it->item_name; ?></td>
                                        <td><?php echo $it->brand; ?></td>
                                        <td><?php echo $it->item_description; ?></td>
                                        <td><?php echo $it->control_no; ?></td>
                                        <td><?php echo $it->serial_number; ?></td>
                                    </tr>
                                <?php $counter++;
                                endforeach; ?>
                            </tbody>
                        </table>
                        <div class="box-footer">
                            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#transferItem">
                                <i class="glyphicon glyphicon-plus"></i> Add Item
                            </button>
                        </div>

                        <div class="modal fade" id="transferItem" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg" style="width:85%" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('PropertyCust/itemTransferTransac'); ?>
                                    <div class="modal-body">
                                        <table class="table" id="sorting">
                                            <thead>
                                                <tr>
                                                    <th style="width: 3%"></th>
                                                    <th style="width: 5%">
                                                        <h5>No.</h5>
                                                    </th>
                                                    <th style="width: 5%">
                                                        <h5>Qty</h5>
                                                    </th>
                                                    <th style="width: 9%">
                                                        <h5>Unit</h5>
                                                    </th>
                                                    <th style="width: 9%">
                                                        <h5>Item</h5>
                                                    </th>
                                                    <th style="width: 9%">
                                                        <h5>Brand</h5>
                                                    </th>
                                                    <th style="width: 9%">
                                                        <h5>Description</h5>
                                                    </th>
                                                    <th style="width: 9%">
                                                        <h5>Control Number</h5>
                                                    </th>
                                                    <th style="width: 9%">
                                                        <h5>Serial Number</h5>
                                                    </th>
                                                    <th style="width: 9%">
                                                        <h5>Status</h5>
                                                    </th>
                                                    <th style="width: 9%">
                                                        <h5>Department Area</h5>
                                                    </th>
                                                    <th style="width: 9%">
                                                        <h5>Remarks</h5>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php
                                                $count = 1;
                                                foreach ($items as $item) : ?>
                                                    <tr>
                                                        <td><input type="checkbox" name="select[]" value="<?php echo $item->item_id; ?>"></td>
                                                        <td><?php echo $count; ?></td>
                                                        <td><?php echo $item->quantity; ?></td>
                                                        <td><?php echo $item->unit; ?></td>
                                                        <td><?php echo $item->item_name; ?></td>
                                                        <td><?php echo $item->brand; ?></td>
                                                        <td><?php echo $item->item_description; ?></td>
                                                        <td><?php echo $item->control_number; ?></td>
                                                        <td><?php echo $item->serial_number; ?></td>
                                                        <td><?php echo $item->status; ?></td>
                                                        <td><?php echo $item->areaName; ?></td>
                                                        <td><?php echo $item->remarks; ?></td>
                                                    </tr>
                                                <?php $count++;
                                                endforeach; ?>
                                            </tbody>
                                        </table>

                                    </div>

                                    <div class="box-footer">
                                        <input type="hidden" name="department" value="<?php echo $dept_choice; ?>">
                                        <button type="submit" class="btn btn-success pull-right">Add</button><br> <br><br><br>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <div class="btn-toolbar">
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#transferTransac">
                                        <i class="glyphicon glyphicon-save"></i>Transfer Items
                                    </button>
                                </div>

                                <?php echo form_open('PropertyCust/saveTransTransaction'); ?>
                                <div class="modal fade" id="transferTransac" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" style="width:50%" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title" id="exampleModalLabel">Transfer/Assign Item Department</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h4>Current Department: </h4>
                                                        <input type="text" name="deptFrom" value="<?php echo $dept_choice; ?>" readonly>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h4>Transfer To: </h4>
                                                        <select class="form-control" id="transferTransaction" name="transferTo">
                                                            <option value="" disabled>Select Department</option>
                                                            <?php foreach ($departments as $dept) : ?>
                                                                <option value="<?php echo $dept->deptID ?>"><?php echo $dept->deptName; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h4>Department Area: </h4>
                                                        <select class="form-control" id="section" name="area_to">
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h4>Requested by:</h4>
                                                        <input type="text" name="trans_requested_by" class="form-control">
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h4>Received by:</h4>
                                                        <input type="text" name="trans_received_by" class="form-control">
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h4>Reason for transfer:</h4>
                                                        <input type="text" name="trans_transfer_remarks" class="form-control">
                                                    </div>
                                                </div>

                                                <input type="text" name="department" value="<?php echo $dept_choice; ?>" hidden />

                                            </div>
                                            <div class="modal-footer">
                                                <div class="btn-toolbar">
                                                    <div class="btn-group pull-right">
                                                        <button type="submit" class="btn btn-success">Save changes</button>
                                                    </div>
                                                    <div class="btn-group pull-right">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-group pull-right">
                                    <?php echo form_open('PropertyCust/cancel_transfer'); ?>
                                    <button type="submit" class="btn btn-danger"> <i class="fa fa-times"></i>Cancel Transaction</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                    <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
                    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.js'); ?>"></script>
                    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#transferTransaction').change(function() {
                                var id = $(this).val();
                                $.ajax({
                                    url: "<?php echo site_url('PropertyCust/areaName'); ?>",
                                    method: "POST",
                                    data: {
                                        id: id
                                    },
                                    async: true,
                                    dataType: 'json',
                                    success: function(data) {
                                        var html = '';
                                        var i;
                                        for (i = 0; i < data.length; i++) {
                                            html += '<option value=' + data[i].areaID + '>' + data[i].areaName + '</option>';
                                        }
                                        $('#section').html(html);

                                    }
                                });
                                return false;
                            });

                        });
                    </script>

                </div>
        </div>
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

    <!-- iCheck 1.0.1 -->
    <script src="<?php echo base_url(); ?>/assets/theme/plugins/iCheck/icheck.min.js"></script>

    <script>
        $(function() {
            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            })
        })
    </script>

    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(function() {
            $('#sorting').DataTable()
            $('#sorting1').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': true
            })
        })
    </script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>