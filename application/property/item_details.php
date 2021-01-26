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
                    <div class="box-body">
                        <?php echo form_open('PropertyCust/deptInventory'); ?>
                        <div class="btn-group pull-left">
                            <input type="hidden" name="department" id="department" value="<?php echo $choice; ?>">
                            <button type="submit" class="btn btn-link" style="color:black; text-decoration: none;"><i class="glyphicon glyphicon-backward"></i> Back</button>
                        </div>
                        </form>
                        <br><br>

                        <?php echo form_open('PropertyCust/editInventory'); ?>
                        <div class="row">
                            <div class="col-lg-3">
                                <h4>Control No.:</h4>
                                <input type="text" class="form-control" name="control_num" value="<?php echo $item_details->control_number; ?>">
                            </div> <!-- /.col -->

                            <div class="col-lg-3">
                                <h4>Serial No.:</h4>
                                <input type="text" class="form-control" name="serial" value="<?php echo $item_details->serial_number; ?>">
                            </div> <!-- /.col -->

                            <div class="col-lg-3">
                                <h4>Item:</h4>
                                <input type="text" class="form-control" name="item" value="<?php echo $item_details->item_name; ?>" readonly>
                            </div> <!-- /.col -->

                            <div class="col-lg-3">
                                <h4>Brand:</h4>
                                <input type="text" class="form-control" name="brand" value="<?php echo $item_details->brand; ?>" readonly>
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->

                        <div class="row">
                            <div class="col-lg-5">
                                <h4>Item Description:</h4>
                                <input type="text" class="form-control" name="description" value="<?php echo $item_details->item_description; ?>">
                            </div> <!-- /.col -->

                            <div class="col-lg-2">
                                <h4>Price Per Unit:</h4>
                                <input type="text" class="form-control" name="price" value="<?php echo $item_details->pricePerUnit; ?>" readonly>
                            </div> <!-- /.col -->

                            <div class="col-lg-2">
                                <h4>Department:</h4>
                                <input type="text" class="form-control" value="<?php echo $item_details->deptName; ?>" readonly>
                            </div> <!-- /.col -->

                            <div class="col-lg-3">
                                <?php if ($item_details->dept_section == 0) { ?>
                                    <h4>Department Area:</h4>
                                    <select name="dept_area" id="dept_area" class="form-control">
                                        <option value="">Area location</option>
                                        <?php foreach ($areas as $dept_area) :
                                                if ($dept_area->deptID == $item_details->department) {
                                                    ?>
                                                <option value="<?php echo $dept_area->areaID; ?>"><?php echo $dept_area->areaName; ?></option>
                                        <?php }
                                            endforeach; ?>
                                    </select>
                                <?php } ?>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <h4>Date Received:</h4>
                                <input type="text" class="form-control" value="<?php echo $item_details->date_received; ?>" readonly>
                            </div> <!-- /.col -->

                            <div class="col-lg-3">
                                <h4>Received by:</h4>
                                <input type="text" class="form-control" name="received_by" value="<?php echo $item_details->received_by; ?>">
                            </div> <!-- /.col -->

                            <div class="col-lg-3">
                                <h4>Remarks:</h4>
                                <input type="text" class="form-control" name="remarks" value="<?php echo $item_details->remarks; ?>">
                            </div> <!-- /.col -->

                            <div class="col-lg-3">
                                <h4>Status:</h4>
                                <input type="text" class="form-control" name="status" value="<?php echo $item_details->status; ?>">
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->

                        <div class="box-footer">
                            <div class="btn-toolbar">
                                <div class="btn-group pull-right">
                                    <input type="text" name="itemID" value="<?php echo $item_details->item_id ?>" hidden>
                                    <button type="submit" class="btn btn-success pull-right"><i class="glyphicon glyphicon-save"></i> Save</button>
                                </div>
                                </form>


                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-warning pull-right" data-toggle="modal" data-target="#exampleModal<?php echo $item_details->item_id; ?>">
                                        <i class="glyphicon glyphicon-transfer"></i> Transfer Item
                                    </button>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- Modal -->
                                            <?php echo form_open('PropertyCust/transferItem'); ?>
                                            <div class="modal fade" id="exampleModal<?php echo $item_details->item_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                <div class="col-lg-3">
                                                                    <h4>Current Department: </h4>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <input type="text" class="form-control" name="deptFrom" value="<?php echo $item_details->deptName; ?>" readonly></td>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <h4>Transfer To: </h4>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <select class="form-control" id="transfer" name="transferTo">
                                                                        <?php foreach ($departments as $dept) : ?>
                                                                            <option value="<?php echo $dept->deptID ?>"><?php echo $dept->deptName; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <h4>Department Area: </h4>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <select class="form-control" id="area_section" name="area_to">
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <h4>Remarks:</h4>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <input type="text" class="form-control" name="transfer_remark"></td>
                                                                </div>
                                                            </div>

                                                            <input type="text" name="control_no" value="<?php echo $item_details->control_number; ?>" hidden />
                                                            <input type="text" name="itemID" value="<?php echo $item_details->item_id; ?>" hidden />

                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="text" name="deptID" value="<?php echo $item_details->department; ?>" hidden />
                                                            <div class="btn-toolbar">
                                                                <div class="btn-group  pull-right">
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
                                        </div>
                                    </div>
                                </div>


                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#repair<?php echo $item_details->item_id; ?>">
                                        Repair Item
                                    </button>

                                    <div class="modal fade" id="repair<?php echo $item_details->item_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Item Repair</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <?php echo form_open('PropertyCust/repair_item'); ?>
                                                <div class="modal-body">
                                                    <input type="text" name="control_no" value="<?php echo $item_details->control_number; ?>" hidden />
                                                    <input type="text" name="itemID" value="<?php echo $item_details->item_id; ?>" hidden />

                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h4>Type of Repair:</h4>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <input type="text" class="form-control" name="repair_type" value="">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h4>Repair Location</h4>
                                                        </div>
                                                        <div class="col-lg-5">
                                                        <input type="text" class="form-control" name="repair_loc" value="">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h4>In Charge</h4>
                                                        </div>
                                                        <div class="col-lg-5">
                                                        <input type="text" class="form-control" name="in_charge" value="">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h4>Remarks:</h4>
                                                        </div>
                                                        <div class="col-lg-5">
                                                        <input type="text" class="form-control" value="">
                                                        </div>
                                                    </div>
                                            <div class="modal-footer">
                                                <input type="text" name="itemID" value="<?php echo $item_details->item_id; ?>" hidden />
                                                <input type="text" name="deptID" value="<?php echo $item_details->department; ?>" hidden />
                                                <div class = "btn-toolbar">
                                                <div class = "btn-group pull-right">
                                                <button type="submit" class="btn btn-success">Save changes</button>
                                                    </div>
                                                    <div class = "btn-group pull-right">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br><br>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="jesiah-tab" data-toggle="tab" href="#transferHistory" role="tab" aria-controls="jesiah" aria-selected="false">Transfer History</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="aguilar-tab" data-toggle="tab" href="#repairHistory" role="tab" aria-controls="aguilar" aria-selected="false">Repair History</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade" id="transferHistory" role="tabpanel active" aria-labelledby="jesiah-tab">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 150px" class="text-center">
                                                            <h4>Date</h4>
                                                        </th>
                                                        <th style="width: 500px" class="text-center">
                                                            <h4>Description of Activity</h4>
                                                        </th>
                                                        <th style="width: 100px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($history as $details) :
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $details->date; ?></td>
                                                            <td><?php echo $details->activity_description; ?></td>
                                                            <td>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter<?php echo $details->transID; ?>">
                                                                    View Details
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModalCenter<?php echo $details->transID; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <table class="table table-boredered">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>
                                                                                                <h4>ItemID</h4>
                                                                                            </th>
                                                                                            <th>
                                                                                                <h4>Item name</h4>
                                                                                            </th>
                                                                                            <th>
                                                                                                <h4>Transfer From</h4>
                                                                                            </th>
                                                                                            <th>
                                                                                                <h4>Transfer To</h4>
                                                                                            </th>
                                                                                            <th>
                                                                                                <h4>Date Transfered</h4>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($trans_history as $trans_detail) :
                                                                                                if ($trans_detail->transacID == $details->transID) {
                                                                                                    ?>
                                                                                                <tr>
                                                                                                    <td><?php echo $trans_detail->item_id; ?></td>
                                                                                                    <td><?php echo $trans_detail->item_name; ?></td>
                                                                                                    <td><?php echo $trans_detail->transfer_from; ?></td>
                                                                                                    <td><?php echo $trans_detail->transfer_to; ?></td>
                                                                                                    <td><?php echo $trans_detail->date_transfer; ?></td>
                                                                                                </tr>
                                                                                        <?php }
                                                                                            endforeach; ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="tab-pane fade" id="repairHistory" role="tabpanel active" aria-labelledby="aguilar-tab">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 150px" class="text-center">
                                                            <h4>Transaction ID</h4>
                                                        </th>
                                                        <th style="width: 150px" class="text-center">
                                                            <h4>Date</h4>
                                                        </th>
                                                        <th style="width: 500px" class="text-center">
                                                            <h4>Description of Activity</h4>
                                                        </th>
                                                        <th style="width: 100px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($rep_history as $details) :
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $details->transID; ?></td>
                                                            <td><?php echo $details->date; ?></td>
                                                            <td><?php echo $details->activity_description; ?></td>
                                                            <td>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter1<?php echo $details->transID; ?>">
                                                                    View Details
                                                                </button>

                                                                <!-- Modal -->
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModalCenter1<?php echo $details->transID; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <table class="table table-boredered">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>
                                                                                                <h4>Repair Type</h4>
                                                                                            </th>
                                                                                            <th>
                                                                                                <h4>Repair Location</h4>
                                                                                            </th>
                                                                                            <th>
                                                                                                <h4>Repair Date</h4>
                                                                                            </th>
                                                                                            <th>
                                                                                                <h4>Person In Charge</h4>
                                                                                            </th>
                                                                                            <th>
                                                                                                <h4>Remarks</h4>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach ($repHistory as $trans_detail) :
                                                                                                if ($trans_detail->transID == $details->transID) {
                                                                                                    ?>
                                                                                                <tr>
                                                                                                    <td><?php echo $trans_detail->repair_type; ?></td>
                                                                                                    <td><?php echo $trans_detail->repair_location; ?></td>
                                                                                                    <td><?php echo $trans_detail->repair_date; ?></td>
                                                                                                    <td><?php echo $trans_detail->in_charge; ?></td>
                                                                                                    <td><?php echo $trans_detail->remarks; ?></td>
                                                                                                </tr>
                                                                                        <?php }
                                                                                            endforeach; ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
                <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.js'); ?>"></script>
                <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#select2').change(function() {
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
                                    $('#dept_area').html(html);

                                }
                            });
                            return false;
                        });

                    });

                    $(document).ready(function() {
                        $('#transfer').change(function() {
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
                                    $('#area_section').html(html);

                                }
                            });
                            return false;
                        });

                    });
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