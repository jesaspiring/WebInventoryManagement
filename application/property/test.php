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
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/plugins/iCheck/all.css">

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
                        <div class="row">
                            <!--Department and Area-->
                            <div class="col-lg-3">
                                <h4>College/Department</h4>
                                <?php echo form_open('PropertyCust/deptInventory'); ?>
                                <select name="department" id="department" class="form-control">
                                    <option value="">Select Department</option>
                                    <?php foreach ($departments as $department) : ?>
                                        <option value="<?php echo $department->deptID; ?>" <?php if ($dept_choice == $department->deptName) echo "selected"; ?>><?php echo $department->deptName; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div> <!-- /.col -->
                            <br> <br>
                            <button type="submit" class="btn btn-default">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                            </form>
                        </div> <!-- /.row -->

                        <br><br>
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li><a href="#assigned" data-toggle="tab">Assigned(<?php echo $totalAssigned; ?>)</a></li>
                                <li><a href="#unassigned" data-toggle="tab">Unassigned(<?php echo $totalNoAssigned; ?>)</a></li>
                                <li><a href="#transfer" data-toggle="tab">Transfered Item(<?php echo $totalTransfer; ?>)</a></li>
                                <li><a href="#repair" data-toggle="tab">Under Repair(<?php echo $totalRepair; ?>)</a></li>
                                <li><a href="#disposed" data-toggle="tab">Disposed(<?php echo $totalDisposed; ?>)</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="assigned">
                                    <table class="table" id="assign">
                                        <thead>
                                            <tr>
                                                <th style="width: 12%">
                                                    <h4>No.</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Qty</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Unit</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Item</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Brand</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Model</h4>
                                                </th>
                                                <th style="width: 16%">
                                                    <h4>Description</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4></h4>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $counter = 1;
                                            foreach ($item_group as $item_group) :
                                                ?>
                                                <tr>
                                                    <td><?php echo $counter; ?></td>
                                                    <td><?php echo $item_group->quantity; ?></td>
                                                    <td><?php echo $item_group->unit; ?></td>
                                                    <td><?php echo $item_group->item_name; ?></td>
                                                    <td><?php echo $item_group->brand; ?></td>
                                                    <td></td>
                                                    <td><?php echo $item_group->item_description; ?></td>
                                                    <td>

                                                        <div class="dropdown">
                                                            <button class="btn btn-dafault dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action<span class="caret"></span>
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal1<?php echo $counter; ?>">
                                                                    View Details
                                                                </button>

                                                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#wdArea<?php echo $counter; ?>">
                                                                    Update Details
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade" id="wdArea<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" style="width:100%" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <?php echo form_open('PropertyCust/assignArea'); ?>
                                                                        <table class="table" id="updateDetails_modal">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th style="width: 7%">
                                                                                        <h4>No.</h4>
                                                                                    </th>
                                                                                    <th style="width: 10%">
                                                                                        <h4>Qty</h4>
                                                                                    </th>
                                                                                    <th style="width: 10%">
                                                                                        <h4>Unit</h4>
                                                                                    </th>
                                                                                    <th style="width: 10%">
                                                                                        <h4>Item</h4>
                                                                                    </th>
                                                                                    <th style="width: 10%">
                                                                                        <h4>Description</h4>
                                                                                    </th>
                                                                                    <th style="width: 10%">
                                                                                        <h4>Control Number</h4>
                                                                                    </th>
                                                                                    <th style="width: 10%">
                                                                                        <h4>Serial Number</h4>
                                                                                    </th>
                                                                                    <th style="width: 10%">
                                                                                        <h4>Department Area</h4>
                                                                                    </th>
                                                                                    <th style="width: 10%">
                                                                                        <h4>Remarks</h4>
                                                                                    </th>
                                                                                    <th style="width: 10%"></th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <?php
                                                                                    $count = 1;
                                                                                    foreach ($items as $item) :
                                                                                        if (
                                                                                            $item->item_name == $item_group->item_name
                                                                                            &&  $item->item_description == $item_group->item_description
                                                                                            &&  $item->brand == $item_group->brand
                                                                                            &&  $item->areaName != "No Assigned Area"
                                                                                        ) {
                                                                                            ?>
                                                                                        <tr>
                                                                                            <input type="hidden" value="<?php echo $item->item_id; ?>" name="itemID[]">
                                                                                            <td><?php echo $count; ?></td>
                                                                                            <td><?php echo $item->quantity; ?></td>
                                                                                            <td><input type="text" value="<?php echo $item->unit; ?>" name="item_unit[]"></td>
                                                                                            <td><input type="text" value="<?php echo $item->item_name; ?>" name="item_name[]"></td>
                                                                                            <td><input type="text" value="<?php echo $item->item_description; ?>" name="item_description[]"></td>
                                                                                            <td><input type="text" value="<?php echo $item->control_number; ?>" name="item_control[]"></td>
                                                                                            <td><input type="text" value="<?php echo $item->serial_number; ?>" name="item_serial[]"></td>
                                                                                            <td><select name="assignedArea[]" id="dept_area" class="form-control">
                                                                                                    <option value="">Area</option>
                                                                                                    <?php foreach ($areas as $dept_area) :
                                                                                                                    if ($dept_area->deptID == $item->department) {
                                                                                                                        ?>
                                                                                                            <option value="<?php echo $dept_area->areaID; ?>" <?php if ($item->areaName == $dept_area->areaName) echo "selected"; ?>><?php echo $dept_area->areaName; ?></option>
                                                                                                    <?php }
                                                                                                                endforeach; ?>
                                                                                                </select></td>
                                                                                            <td><input type="text" value="<?php echo $item->remarks; ?>" name="item_remarks[]"></td>
                                                                                            <td></td>
                                                                                        </tr>

                                                                                <?php
                                                                                            $count++;
                                                                                        }
                                                                                    endforeach; ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary pull-right">Save Changes</button>
                                                                            </form>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Edit -->
                                                        <div class="modal fade" id="exampleModal1<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" style="width:95%" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <table class="table" id="assign_viewDetails_Modal">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th style="width: 7%">
                                                                                        <h4>No.</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Item ID</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Qty</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Unit</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Item</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Brand</h4>
                                                                                    </th>
                                                                                    <th style="width: 9%">
                                                                                        <h4>Description</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Control Number</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Serial Number</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Status</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Department Area</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Remarks</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Received By</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%"></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                    $count = 1;
                                                                                    foreach ($items as $item) :
                                                                                        if (
                                                                                            $item->item_name == $item_group->item_name
                                                                                            &&  $item->item_description == $item_group->item_description
                                                                                            &&  $item->brand == $item_group->brand
                                                                                            &&  $item->areaName != "No Assigned Area"
                                                                                        ) {
                                                                                            ?>
                                                                                        <tr>
                                                                                            <td><?php echo $count; ?></td>
                                                                                            <td><?php echo $item->item_id; ?></td>
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

                                                                                            <td>
                                                                                                <div class="dropdown">
                                                                                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                        Action<span class="caret"></span>
                                                                                                    </button>

                                                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                                                                        <?php echo form_open('PropertyCust/history_result'); ?>
                                                                                                        <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />
                                                                                                        <input type="text" name="dept" value="<?php echo $item->department; ?>" hidden />
                                                                                                        <button type="submit" class="btn btn-link">View Item</button>
                                                                                                        </form>

                                                                                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#itemTrans">
                                                                                                            Transfer Item
                                                                                                        </button>

                                                                                                        <?php echo form_open('PropertyCust/item_repair'); ?>
                                                                                                        <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />
                                                                                                        <input type="text" name="dept" value="<?php echo $item->department; ?>" hidden />
                                                                                                        <button type="submit" class="btn btn-link">Repair Item</button>
                                                                                                        </form>

                                                                                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#disposeAssigned">
                                                                                                            Dispose Item
                                                                                                        </button>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td></td>
                                                                                        </tr>

                                                                                <?php
                                                                                            $count++;
                                                                                        }
                                                                                    endforeach; ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php echo form_open('PropertyCust/transferItem'); ?>
                                                        <div class="modal fade" id="itemTrans" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                            </div>
                                                                            <div class="col-lg-5">
                                                                                <input type="text" class="form-control" name="deptFrom" value="<?php echo $item->deptName; ?>" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-4">
                                                                                <h4>Transfer To: </h4>
                                                                            </div>
                                                                            <div class="col-lg-5">
                                                                                <select class="form-control" id="select2" name="transferTo">
                                                                                    <?php foreach ($departments as $dept) : ?>
                                                                                        <option value="<?php echo $dept->deptID ?>"><?php echo $dept->deptName; ?></option>
                                                                                    <?php endforeach; ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>


                                                                        <div class="row">
                                                                            <div class="col-lg-4">
                                                                                <h4>Remarks:</h4>
                                                                            </div>
                                                                            <div class="col-lg-5">
                                                                                <input type="text" name="transfer_remark" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <input type="text" name="control_no" value="<?php echo $item->control_number; ?>" hidden />
                                                                        <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <input type="text" name="deptID" value="<?php echo $item->department; ?>" hidden />
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Save changes</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php echo form_open('PropertyCust/dispose_item'); ?>
                                                        <div class="modal fade" id="disposeAssigned" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" style="width:70%" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                        <h5 class="modal-title" id="exampleModalLabel">Item disposal remarks</h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-2">
                                                                                <h4>Remarks</h4>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <input type="text" class="form-control" placeholder="Remarks" name="remarks" id="remarks">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <input type="text" name="itemID" value=<?php echo $item->item_id; ?> hidden />
                                                                    <input type="text" name="deptID" value=<?php echo $item->department; ?> hidden />
                                                                    <div class="box-footer">
                                                                        <button type="submit" class="btn btn-success pull-right">Submit</button><br> <br><br><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </td>
                                                </tr>

                                            <?php
                                                $counter++;
                                            endforeach; ?>

                                        </tbody>
                                    </table>
                                </div> <!-- /.tab-pane -->

                                <div class="tab-pane" id="unassigned">
                                    <table class="table" id="unassign">
                                        <thead>
                                            <tr>
                                                <th style="width: 12%">
                                                    <h4>No.</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Qty</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Unit</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Item</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Brand</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Model</h4>
                                                </th>
                                                <th style="width: 16%">
                                                    <h4>Description</h4>
                                                </th>
                                                <th style="width: 12%"></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $counter = 1;
                                            foreach ($group as $item_group) :
                                                ?>
                                                <tr>
                                                    <td><?php echo $counter; ?></td>
                                                    <td><?php echo $item_group->quantity; ?></td>
                                                    <td><?php echo $item_group->unit; ?></td>
                                                    <td><?php echo $item_group->item_name; ?></td>
                                                    <td><?php echo $item_group->brand; ?></td>
                                                    <td></td>
                                                    <td><?php echo $item_group->item_description; ?></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-dafault dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action<span class="caret"></span>
                                                            </button>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#noArea<?php echo $counter; ?>">
                                                                    View Details
                                                                </button>

                                                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#assArea<?php echo $counter; ?>">
                                                                    Update Details
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade" id="assArea<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" style="width:100%" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <?php echo form_open('PropertyCust/assignArea'); ?>
                                                                        <table class="table" id="unassign_modal">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th style="width: 7%">
                                                                                        <h4>No.</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Qty</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Unit</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Item</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Description</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Control Number</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Serial Number</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Department Area</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%">
                                                                                        <h4>Remarks</h4>
                                                                                    </th>
                                                                                    <th style="width: 7%"></th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <?php
                                                                                    $count = 1;
                                                                                    foreach ($items as $item) :
                                                                                        if (
                                                                                            $item->item_name == $item_group->item_name
                                                                                            &&  $item->item_description == $item_group->item_description
                                                                                            &&  $item->brand == $item_group->brand
                                                                                            &&  $item->areaName == "No Assigned Area"
                                                                                        ) {

                                                                                            ?>
                                                                                        <tr>
                                                                                            <input type="hidden" value="<?php echo $item->item_id; ?>" name="itemID[]">
                                                                                            <td><?php echo $count; ?></td>
                                                                                            <td><?php echo $item->quantity; ?></td>
                                                                                            <td><input type="text" value="<?php echo $item->unit; ?>" name="item_unit[]"></td>
                                                                                            <td><input type="text" value="<?php echo $item->item_name; ?>" name="item_name[]"></td>
                                                                                            <td><input type="text" value="<?php echo $item->item_description; ?>" name="item_description[]"></td>
                                                                                            <td><input type="text" value="<?php echo $item->control_number; ?>" name="item_control[]"></td>
                                                                                            <td><input type="text" value="<?php echo $item->serial_number; ?>" name="item_serial[]"></td>
                                                                                            <td><select name="assignedArea[]" id="dept_area" class="form-control">
                                                                                                    <option value="">Area</option>
                                                                                                    <?php foreach ($areas as $dept_area) :
                                                                                                                    if ($dept_area->deptID == $item->department) {
                                                                                                                        ?>
                                                                                                            <option value="<?php echo $dept_area->areaID; ?>" <?php if ($item->dept_section == $dept_area->areaID) echo "selected"; ?>><?php echo $dept_area->areaName; ?></option>
                                                                                                    <?php }
                                                                                                                endforeach; ?>
                                                                                                </select></td>
                                                                                            <td><input type="text" value="<?php echo $item->remarks; ?>" name="item_remarks[]"></td>

                                                                                        </tr>

                                                                                <?php
                                                                                            $count++;
                                                                                        }
                                                                                    endforeach; ?>
                                                                            </tbody>
                                                                        </table>

                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary pull-right">Save Changes</button>
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Edit -->
                                                        <div class="modal fade" id="noArea<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" style="width:93%" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <table class="table" id="unassign_viewDetails_Modal">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th style="width: 8%">
                                                                                        <h4>No.</h4>
                                                                                    </th>
                                                                                    <th style="width: 8%">
                                                                                        <h4>Qty</h4>
                                                                                    </th>
                                                                                    <th style="width: 8%">
                                                                                        <h4>Unit</h4>
                                                                                    </th>
                                                                                    <th style="width: 8%">
                                                                                        <h4>Item</h4>
                                                                                    </th>
                                                                                    <th style="width: 8%">
                                                                                        <h4>Brand</h4>
                                                                                    </th>
                                                                                    <th style="width: 12%">
                                                                                        <h4>Description</h4>
                                                                                    </th>
                                                                                    <th style="width: 8%">
                                                                                        <h4>Control Number</h4>
                                                                                    </th>
                                                                                    <th style="width: 8%">
                                                                                        <h4>Serial Number</h4>
                                                                                    </th>
                                                                                    <th style="width: 8%">
                                                                                        <h4>Status</h4>
                                                                                    </th>
                                                                                    <th style="width: 8%">
                                                                                        <h4>Department Area</h4>
                                                                                    </th>
                                                                                    <th style="width: 8%">
                                                                                        <h4>Remarks</h4>
                                                                                    </th>
                                                                                    <th style="width: 8%"></th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <?php
                                                                                    $count = 1;
                                                                                    foreach ($items as $item) :
                                                                                        if (
                                                                                            $item->item_name == $item_group->item_name
                                                                                            &&  $item->item_description == $item_group->item_description
                                                                                            &&  $item->brand == $item_group->brand
                                                                                            &&  $item->areaName == "No Assigned Area"
                                                                                        ) {
                                                                                            ?>
                                                                                        <tr>
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
                                                                                            <td>
                                                                                                <div class="dropdown">
                                                                                                    <button class="btn btn-dafault dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                        Action<span class="caret"></span>
                                                                                                    </button>

                                                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                                                                        <?php echo form_open('PropertyCust/history_result'); ?>
                                                                                                        <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />
                                                                                                        <input type="text" name="dept" value="<?php echo $item->department; ?>" hidden />
                                                                                                        <button type="submit" class="btn btn-link">View Item</button>
                                                                                                        </form>

                                                                                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#transferItem">
                                                                                                            Transfer Item
                                                                                                        </button>

                                                                                                        <?php echo form_open('PropertyCust/item_repair'); ?>
                                                                                                        <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />
                                                                                                        <input type="text" name="dept" value="<?php echo $item->department; ?>" hidden />
                                                                                                        <button type="submit" class="btn btn-link">Repair Item</button>
                                                                                                        </form>

                                                                                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#dispose<?php echo $item->item_id; ?>">
                                                                                                            Dispose Item
                                                                                                        </button>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>

                                                                                        </tr>

                                                                                <?php
                                                                                            $count++;
                                                                                        }
                                                                                    endforeach; ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <?php echo form_open('PropertyCust/transferItem'); ?>
                                                        <div class="modal fade" id="transferItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" style="width:50%" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Transfer/Assign Item Department</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <h4>Current Department: </h4>
                                                                                <input type="text" name="deptFrom" value="<?php echo $item->deptName; ?>" readonly>

                                                                                <h4>Transfer To: </h4>
                                                                                <select class="form-control" id="select2" name="transferTo">
                                                                                    <?php foreach ($departments as $dept) : ?>
                                                                                        <option value="<?php echo $dept->deptID ?>"><?php echo $dept->deptName; ?></option>
                                                                                    <?php endforeach; ?>
                                                                                </select>
                                                                                <h4>Department Area: </h4>
                                                                                <select class="form-control" id="dept_area" name="area_to">

                                                                                </select>
                                                                                <h4>Remarks:</h4>
                                                                                <input type="text" name="transfer_remark">

                                                                            </div>
                                                                        </div>

                                                                        <input type="text" name="control_no" value="<?php echo $item->control_number; ?>" hidden />
                                                                        <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <input type="text" name="deptID" value="<?php echo $item->department; ?>" hidden />
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                            <?php
                                                $counter++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                </div> <!-- /.tab-pane -->


                                <div class="tab-pane" id="transfer">
                                    <table class="table" id="transfer_item">
                                        <thead>
                                            <tr>
                                                <th style="width: 16%">
                                                    <h4>No.</h4>
                                                </th>
                                                <th style="width: 16%">
                                                    <h4>TransacID</h4>
                                                </th>
                                                <th style="width: 16%">
                                                    <h4>Transfered To</h4>
                                                </th>
                                                <th style="width: 16%">
                                                    <h4>Date Transfered</h4>
                                                </th>
                                                <th style="width: 16%">
                                                    <h4>Transfer Reason</h4>
                                                </th>
                                                <th style="width: 16%"></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $count = 1;
                                            foreach ($transfer_history as $detail) :
                                                if ($detail->transfer_from == $dept_choice) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                        <td><?php echo $detail->transID; ?></td>
                                                        <td><?php echo $detail->transfer_to; ?></td>
                                                        <td><?php echo $detail->date_transfer; ?></td>
                                                        <td><?php echo $detail->transfer_reason; ?></td>
                                                        <td>
                                                            <?php if ($detail->date_transfer == "") { ?>
                                                                <?php echo form_open('PropertyCust/unfinished_trans_transaction'); ?>
                                                                <input type="text" name="transID" value="<?php echo $detail->transID; ?>" hidden />
                                                                <input type="text" name="deptFrom" value="<?php echo $detail->transfer_from; ?>" hidden />
                                                                <label>Transaction Incomplete</label>
                                                                <button type="submit" class="btn btn-link">View Transaction</button>
                                                                </form>
                                                            <?php } ?>

                                                            <?php if ($detail->date_transfer != "") { ?>
                                                                <?php echo form_open('PropertyCust/print_trans_form'); ?>
                                                                <input type="text" name="itemID" value="<?php echo $detail->transID; ?>" hidden />
                                                                <button type="submit" class="btn btn-link">View Transfer Form</button>
                                                                </form>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                            <?php $count++;
                                                }
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                </div> <!-- /.tab-pane -->

                                <div class="tab-pane" id="repair">
                                    <table class="table" id="repair_item">
                                        <thead>
                                            <tr>
                                                <th style="width: 11%">
                                                    <h4>No.</h4>
                                                </th>
                                                <th style="width: 11%">
                                                    <h4>TransacID</h4>
                                                </th>
                                                <th style="width: 11%">
                                                    <h4>Item</h4>
                                                </th>
                                                <th style="width: 11%">
                                                    <h4>Brand</h4>
                                                </th>
                                                <th style="width: 11%">
                                                    <h4>Description</h4>
                                                </th>
                                                <th style="width: 11%">
                                                    <h4>Repair Date</h4>
                                                </th>
                                                <th style="width: 11%">
                                                    <h4>In-charge</h4>
                                                </th>
                                                <th style="width: 11%">
                                                    <h4>Remarks</h4>
                                                </th>
                                                <th style="width: 11%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count = 1;
                                            foreach ($repair_history as $detail) :
                                                if ($detail->department == $deptID) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                        <td><?php echo $detail->transID; ?></td>
                                                        <td><?php echo $detail->item_name; ?></td>
                                                        <td><?php echo $detail->brand; ?></td>
                                                        <td><?php echo $detail->item_description; ?></td>
                                                        <td><?php echo $detail->repair_date; ?></td>
                                                        <td><?php echo $detail->in_charge; ?></td>
                                                        <td><?php echo $detail->remarks; ?></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action<span class="caret"></span>
                                                                </button>

                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                                    <?php echo form_open('PropertyCust/markRepairDone'); ?>
                                                                    <input type="text" name="itemID" value="<?php echo $detail->item_id; ?>" hidden />
                                                                    <input type="text" name="deptID" value="<?php echo $detail->department; ?>" hidden />
                                                                    <button type="submit" class="btn btn-link">Mark as Done</button>
                                                                    </form>

                                                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalrepair<?php echo $detail->item_id; ?>">
                                                                        Update Item
                                                                    </button>

                                                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#disposeItem<?php echo $detail->item_id; ?>">
                                                                        Dispose Item
                                                                    </button>

                                                                </div>
                                                            </div>



                                                            <?php echo form_open('PropertyCust/dispose_item'); ?>
                                                            <div class="modal fade" id="disposeItem<?php echo $detail->item_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" style="width:70%" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                            <h4>Item disposal remarks</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <h4>Remarks</h4>
                                                                                <input type="text" class="form-control" placeholder="remarks" name="remarks" id="remarks">
                                                                            </div>

                                                                        </div>

                                                                        <input type="text" name="itemID" value=<?php echo $detail->item_id; ?> hidden />
                                                                        <input type="text" name="deptID" value=<?php echo $detail->department; ?> hidden />
                                                                        <div class="box-footer">
                                                                            <button type="submit" class="btn btn-success pull-right">Submit</button><br> <br><br><br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </form>


                                                        </td>
                                                    </tr>
                                            <?php $count++;
                                                }
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                </div> <!-- /.tab-pane -->


                                <div class="tab-pane" id="disposed">
                                    <table class="table" id="disposed_item">
                                        <thead>
                                            <tr>
                                                <th style="width: 14%">
                                                    <h4>No.</h4>
                                                </th>
                                                <th style="width: 14%">
                                                    <h4>Item</h4>
                                                </th>
                                                <th style="width: 14%">
                                                    <h4>Brand</h4>
                                                </th>
                                                <th style="width: 14%">
                                                    <h4>Description</h4>
                                                </th>
                                                <th style="width: 14%">
                                                    <h4>Status</h4>
                                                </th>
                                                <th style="width: 14%">
                                                    <h4>Remarks</h4>
                                                </th>
                                                <th style="width: 14%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count = 1;
                                            foreach ($disposed as $detail) :
                                                if ($detail->department == $deptID) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                        <td><?php echo $detail->item_name; ?></td>
                                                        <td><?php echo $detail->brand; ?></td>
                                                        <td><?php echo $detail->item_description; ?></td>
                                                        <td><?php echo $detail->status; ?></td>
                                                        <td><?php echo $detail->remarks; ?></td>
                                                        <td>

                                                            <?php echo form_open('PropertyCust/restoreItem'); ?>
                                                            <input type="text" name="itemID" value="<?php echo $detail->item_id; ?>" hidden />
                                                            <input type="text" name="deptID" value="<?php echo $detail->department; ?>" hidden />
                                                            <button type="submit" class="btn btn-link">Restore</button>
                                                            </form>


                                                        </td>
                                                    </tr>
                                            <?php $count++;
                                                }
                                            endforeach; ?>
                                        </tbody>
                                    </table>


                                </div> <!-- /.tab-pane -->


                            </div> <!-- /.tab-content -->
                        </div> <!-- nav-tabs-custom -->
                    </div> <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="btn-toolbar">
                            <div class="btn-group pull-right">
                                <?php if ($dept_choice != "") { ?>
                                    <!-- <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#transferTransac">
                    <i class="glyphicon glyphicon-save"></i>Transfer Items
                </button> -->

                                    <?php echo form_open('PropertyCust/transItem'); ?>
                                    <input type="text" name="department" value="<?php echo $dept_choice; ?>" hidden />
                                    <button type="submit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-transfer"></i> Transfer Items</button>
                                    </form>
                            </div>

                            <div class="btn-group pull-right">
                                <?php echo form_open('PropertyCust/search'); ?>
                                <input type="text" name="department" value="<?php echo $deptID; ?>" hidden />
                                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-list"></i> Physical Count</button>
                                </form>
                            <?php } ?>
                            </div>
                        </div>

                        <?php echo form_open('PropertyCust/transItem'); ?>
                        <div class="modal fade" id="transferTransac" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" style="width:50%" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Transfer/Assign Item Department</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4>Current Department: </h4>
                                                <input type="text" name="deptFrom" value="<?php echo $dept_choice; ?>" readonly>

                                                <h4>Transfer To: </h4>
                                                <select class="form-control" id="transferTransaction" name="transferTo">
                                                    <?php foreach ($departments as $dept) : ?>
                                                        <option value="<?php echo $dept->deptID ?>"><?php echo $dept->deptName; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <h4>Department Area: </h4>
                                                <select class="form-control" id="section" name="area_to">

                                                </select>
                                                <h4>Requested by:</h4>
                                                <input type="text" name="trans_requested_by">

                                                </select>
                                                <h4>Received by:</h4>
                                                <input type="text" name="trans_received_by">

                                                </select>
                                                <h4>Reason for transfer:</h4>
                                                <input type="text" name="trans_transfer_remarks">

                                            </div>
                                        </div>

                                        <input type="text" name="department" value="<?php echo $dept_choice; ?>" hidden />

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
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
            $('#assign').DataTable()
            $('#unassign_viewDetails_Modal').DataTable()
            $('#assign_viewDetails_Modal').DataTable()
            $('#updateDetails_modal').DataTable()
            $('#assign_modal').DataTable()
            $('#transfer_item_modal').DataTable()
            $('#disposed_item_mdal').DataTable()
            $('#repair_item_modal').DataTable()
            $('#unassign_modal').DataTable()
            $('#transfer_item').DataTable()
            $('#disposed_item').DataTable()
            $('#repair_item').DataTable()
            $('#unassign').DataTable({
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