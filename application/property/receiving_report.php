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
                    <div class="box-header">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-4 text-center">
                                <b> CENTRAL PHILIPPINE UNIVERSITY <br>
                                    PROPERTY CUSTODIAN OFFICE <br>
                                    Jaro, Iloilo City, Philippines </b>
                            </div>
                            <!--/.col-->
                            <div class="col-lg-2">
                                <b>RR No: <?php echo $rr_no; ?></b>
                                <h4><label></label></h4>
                            </div>
                            <!--/.col-->
                        </div>
                        <!--/. row-->
                    </div>
                    <!--/.header-->

                    <br>
                    <div class="box-body">
                        <b>
                            <p class="text-center"> RECEIVING REPORT </p>
                        </b>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <?php echo form_open('PropertyCust/createReceivingReport'); ?>
                                    <td style = "border-right: none;"></td>
                                    <td  style = "border-left: none;" colspan="2"> Vendor: <input type="text" name="vendor" value="<?php echo $supplier; ?>" class="form-control"> </td>
                                    <td colspan=3> Invoice No./Date:
                                        <input type="text" name="invoice_no" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td  style = "border-right: none;"></td>
                                    <td  style = "border-left: none;" colspan =2 >P.O.No. / Date:
                                        <input type="text" name="poNum" value="<?php echo $poNumber; ?>" class="form-control">
                                    </td>
                                    <td colspan = 2>
                                        Date Ordered:
                                        <div class="form-group">
                                            <div class="input-group" style = "width:100%">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="date" name="date_ordered" value="<?php echo $dateOrdered; ?>" class="form-control pull-right" id="reservation">
                                            </div> <!-- /.input group -->
                                        </div> <!-- /.form group -->
                                    </td>
                                    <td colspan="2">
                                        Delivery Date:
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="date" name="delivery_date" class="form-control pull-right" value="<?php echo $dateNow; ?>" id="reservation">
                                            </div> <!-- /.input group -->
                                        </div> <!-- /.form group -->
                                    </td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>

                                    <td style="width: 3%; border-right: none;"></td>
                                    <td style="width: 10%; border-left: none;"> Qty </td>
                                    <td style="width: 15%"> Brand </td>
                                    <td style="width: 20%" class="text-center"> Description </td>
                                    <td style="width: 15%"> Unit Price</td>
                                    <td style="width: 15%"> Total Cost</td>

                                </tr>
                                <?php foreach ($items as $item) :
                                    if ($item->requestID == $requestID) {
                                        $totalPrice = $item->pricePerUnit * $item->quantity;

                                        ?>
                                        <tr>
                                            <td  style = "border-right: none;"><?php echo $item->label; ?></td>
                                            <td  style = "border-left: none;"><input type="text" name="quantity[]" value="<?php echo $item->quantity; ?>" class="form-control"></td>
                                            <td><input type="text" name="brand[]" value="<?php echo $item->brand; ?>" class="form-control"></td>
                                            <td><input type="text" name="description[]" value="<?php echo $item->itemDescription; ?>" class="form-control"></td>
                                            <td><input type="text" name="price[]" value="<?php echo $item->pricePerUnit; ?>" class="form-control"></td>
                                            <td><?php echo $totalPrice; ?></td>

                                            <input type="text" name="unit[]" value="<?php echo $item->unit; ?>" hidden>
                                            <input type="text" name="requestID[]" value="<?php echo $item->requestID; ?>" hidden>
                                            <input type="text" name="itemID[]" value="<?php echo $item->itemID; ?>" hidden>
                                            <input type="text" name="date_delivered[]" value="<?php echo $item->date_delivered; ?>" hidden>
                                            <input type="text" name="itemName[]" value="<?php echo $item->itemName; ?>" hidden>


                                        </tr>
                                <?php }

                                endforeach; ?>

                                <tr>
                                    <td  style = "border-right: none;"></td>
                                    <td  style = "border-left: none;" rowspan="2" class="text-center"> Category: <br>
                                        4582 <br>
                                        <input type="text" name="category" value="supplies" class = "form-control"></td>
                                    <td class="text-center"> Delivered Via: <br>
                                        <input type="text" name="delivered_via" class="form-control"></td>
                                    <td colspan="2" class="text-center"> Received by:
                                        <br><br>
                                        <input type="text" name="received_by" class="form-control">
                                        Signature over Printed Name
                                    </td>
                                    <td rowspan = 2>Department:<br>
                                        <input type="text" name="department" value="<?php echo $department; ?>" class="form-control" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td style = "border-right: none;"></td>
                                    <td style = "border-left: none" >Inspected by: <input type="text" name="inspected_by" class="form-control"></td>
                                    <td colspan = 2 > Date Recieved:
                                        <div class="form-group" style = "width: 100%">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="date" name="date_received" value="<?php echo $dateReceived; ?>" class="form-control pull-right" id="reservation">
                                            </div> <!-- /.input group -->
                                        </div> <!-- /.form group -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/. boxbody-->

                <div class="box-footer">
                        <input type="text" name="rr_no" value="<?php echo $rr_no; ?>" hidden>
                        <button type="submit" class="btn btn-success pull-right"><i class="glyphicon glyphicon-save"></i>  Save</button>
                        </form>
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
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>