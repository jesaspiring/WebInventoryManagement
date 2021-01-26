<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
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
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">CPU</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>CPU</b>Purchasing</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">


                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Inventory</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PropertyCust/showDepartment'); ?>"><i class="fa fa-circle-o"></i> View Inventory</a></li>
                            <li><a href="<?php echo base_url('index.php/PropertyCust/physicalCount'); ?>"><i class="fa fa-circle-o"></i> Physical Count</a></li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-edit"></i> <span>History</span>
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

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Report</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PropertyCust/view_rr'); ?>"><i class="fa fa-circle-o"></i> Receiving Report</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Incoming Items</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                <span class="pull-right-container">
                                    <span class="label label-primary pull-right"><?php echo $request_count; ?></span>
                                </span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PropertyCust/incoming_items'); ?>"><i class="fa fa-book"></i> <span>Incoming Purchase Order</span>
                                    <span class="pull-right-container">
                                        <span class="label label-primary pull-right"><?php echo $request_count; ?></span>
                                    </span>
                                </a></li>
                            <li><a href="<?php echo base_url('index.php/PropertyCust/pending_po'); ?>"><i class="fa fa-book"></i> <span>Pending Purchase Order</span></a></li>
                            <li><a href="<?php echo base_url('index.php/PropertyCust/recently_added'); ?>"><i class="fa fa-book"></i> <span>Recently Added Orders</span></a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php echo $this->session->userdata('department') ?>
                    <small>Welcome <?php echo $this->session->userdata('username'); ?></small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="box box-default">
                    <div class="box-header with-border">
                        <h1 class="box-title">Purchase Order Form</h1>

                        <br><br>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4>Supplier: </h4>
                                    <input type="text" name="supplier" value="<?php echo $po_details->supplierName; ?>" class="form-control" readonly>
                                </div>

                                <div class="col-lg-6">
                                    <h4>P.O.Number</h4>
                                    <input type="text" name="po_number" value="<?php echo $po_details->PO_number; ?>" class="form-control" readonly>
                                </div>

                                <div class="col-lg-6">
                                    <h4>Request ID</h4>
                                    <input type="text" name="po_number" value="<?php echo $po_details->request_id; ?>" class="form-control" readonly>
                                </div>

                                <div class="col-lg-6">
                                    <h4><label>Order Date</label></h4>
                                    <input type="text" name="date" value="<?php echo $po_details->order_date; ?>" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table">
                        <!--done-->
                        <thead>
                            <tr>
                                <th>
                                    <h4>Item</h4>
                                </th>
                                <th>
                                    <h4>Brand</h4>
                                </th>
                                <th>
                                    <h4>Model</h4>
                                </th>
                                <th>
                                    <h4>Description</h4>
                                </th>
                                <th>
                                    <h4>Quantity</h4>
                                </th>
                                <th>
                                    <h4></h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item) :
                                if ($item->requestID == $po_details->request_id) {
                                    ?>

                                    <tr>
                                        <td><?php echo $item->itemName; ?></td>
                                        <td><?php echo $item->brand; ?></td>
                                        <td><?php echo $item->model; ?></td>
                                        <td><?php echo $item->itemDescription; ?></td>
                                        <td><?php echo $item->quantity; ?></td>
                                        <td>
                                            <div class="dropdown">

                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#manifest<?php echo  $po_details->PO_number; ?>">
                                                        Update Manifest
                                                    </button>

                                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#view_items<?php echo  $po_details->PO_number; ?>">
                                                        View Items
                                                    </button>

                                                </div>
                                            </div>

                                            <div class="modal fade" id="manifest<?php echo  $po_details->PO_number; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <!--done-->
                                                <div class="modal-dialog modal-lg" style="width:80%" role="document">
                                                    <!--done-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Items</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <!--done-->
                                                            <table class="table" id="myTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <h4>Item name</h4>
                                                                        </th>
                                                                        <th>
                                                                            <h4>Brand</h4>
                                                                        </th>
                                                                        <th>
                                                                            <h4>Description</h4>
                                                                        </th>
                                                                        <th>
                                                                            <h4>Unit</h4>
                                                                        </th>
                                                                        <th>
                                                                            <h4>Quantity</h4>
                                                                        </th>

                                                                        <th scope="col" class="col-lg-2 col-sm-4">
                                                                            <h4></h4>
                                                                        </th>
                                                                        <th scope="col" class="col-lg-2 col-sm-4">
                                                                            <h4></h4>
                                                                        </th>
                                                                        <th scope="col" class="col-lg-2 col-sm-4">
                                                                            <h4></h4>
                                                                        </th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <?php echo form_open('PropertyCust/validate_po'); ?>
                                                                    <?php foreach ($items as $items) :
                                                                                if ($items->requestID == $po_details->request_id) {
                                                                                    ?>
                                                                            <tr>
                                                                                <!--done-->
                                                                                <td><?php echo $items->itemName; ?></td>
                                                                                <td><?php echo $items->brand; ?></td>
                                                                                <td><?php echo $items->itemDescription; ?></td>
                                                                                <td><?php echo $items->unit; ?></td>
                                                                                <td><?php echo $items->quantity; ?></td>
                                                                                <td>
                                                                                    <input type="text" name="itemID[]" value="<?php echo $items->itemID; ?>" hidden>

                                                                                    <label>Mark item as</label>
                                                                                    <select name="choice[]" id="choice" class="form-control">
                                                                                        <option value="complete">Complete</option>
                                                                                        <option value="incomplete">Incomplete</option>
                                                                                        <option value="wrong item">Wrong Item</option>
                                                                                        <option value="substandard">Substandard</option>
                                                                                        <option value="cancelled">Cancelled</option>
                                                                                    </select>

                                                                                </td>
                                                                                <td>
                                                                                    <label>Quantity Delivered</label>
                                                                                    <input type="number" placeholder="Quantity" name="quantity_delivered[]" id="quantity_delivered" value="<?php echo $items->quantity; ?>">
                                                                                </td>
                                                                                <td>
                                                                                    <label>With Discrepancy</label>
                                                                                    <input type="number" placeholder="Quantity" name="with_problem[]" id="with_problem">
                                                                                </td>

                                                                            </tr>
                                                                    <?php }

                                                                            endforeach; ?>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                        <!--modal-body-->


                                                        <div class="modal-footer">
                                                            <!--done-->
                                                            <input type="text" value="<?php echo $po_details->PO_number ?>" name="poNum" hidden />
                                                            <input type="text" value="<?php echo $po_details->request_id; ?>" name="requestID" hidden />
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                    <!--modal-footer-->
                                                </div>
                                                <!--/.modal-dialog-->
                                            </div>
                                            <!--/.modal-fade-->


                                            <div class="modal fade" id="view_items<?php echo  $po_details->PO_number; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <!--done-->
                                                <div class="modal-dialog modal-lg" style="width:80%" role="document">
                                                    <!--done-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Items</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <!--done-->
                                                            <table class="table" id="myTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <h4>Item name</h4>
                                                                        </th>
                                                                        <th>
                                                                            <h4>Brand</h4>
                                                                        </th>
                                                                        <th>
                                                                            <h4>Description</h4>
                                                                        </th>
                                                                        
                                                                        <th scope="col" class="col-lg-2 col-sm-4">
                                                                            <h4>Control Number</h4>
                                                                        </th>
                                                                        <th scope="col" class="col-lg-2 col-sm-4">
                                                                            <h4>Serial Number</h4>
                                                                        </th>
                                                                        <th scope="col" class="col-lg-2 col-sm-4">
                                                                            <h4></h4>
                                                                        </th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <?php foreach ($received_items as $items) :
                                                                                if ($items->requestID == $po_details->request_id) {
                                                                                    for($i = 0; $i < $items->quantity; $i++){
                                                                                    ?>
                                                                            <tr>
                                                                                <!--done-->
                                                                                <td><?php echo $items->itemName; ?></td>
                                                                                <td><?php echo $items->brand; ?></td>
                                                                                <td><?php echo $items->itemDescription; ?></td>
                                                                                <td><?php echo $items->itemDescription; ?></td>
                                                                            </tr>
                                                                    <?php }
                                                                                }
                                                                            endforeach; ?>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                        <!--modal-body-->


                                                        <div class="modal-footer">
                                                            <!--done-->
                                                            <input type="text" value="<?php echo $po_details->PO_number ?>" name="poNum" hidden />
                                                            <input type="text" value="<?php echo $po_details->request_id; ?>" name="requestID" hidden />
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                    <!--modal-footer-->
                                                </div>
                                                <!--/.modal-dialog-->
                                            </div>
                                            <!--/.modal-fade-->
                                        </td>
                                    </tr>

                            <?php }
                            endforeach; ?>
                        </tbody>

                    </table>
                </div>


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- Default to the left -->
            <strong>Copyright &copy; 2019 <a href="#">Thesis Group</a>.</strong> All rights reserved.
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
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>