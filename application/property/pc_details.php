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
                        <div class="row">
                            <!--Department and Area-->
                            <div class="col-lg-3">
                                <h4>College/Department</h4>
                                <?php echo form_open('PropertyCust/search'); ?>
                                <select name="department" id="department" class="form-control">
                                    <option value="">Select Department</option>
                                    <?php foreach ($departments as $department) : ?>
                                        <option value="<?php echo $department->deptID; ?>" <?php if ($department->deptName == $dept_choice) echo "selected"; ?>><?php echo $department->deptName; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <br><br>
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                            </form>
                        </div>


                        <?php foreach ($areas as $area) : ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="11" class="text-center">
                                            <h4><b><?php echo $area->areaName; ?></b></h4>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th style="width: 9%">
                                            <h4>No.</h4>
                                        </th>
                                        <th style="width: 9%">
                                            <h4>Qty</h4>
                                        </th>
                                        <th style="width: 9%">
                                            <h4>Unit</h4>
                                        </th>
                                        <th style="width: 9%">
                                            <h4>Item</h4>
                                        </th>
                                        <th style="width: 9%">
                                            <h4>Brand</h4>
                                        </th>
                                        <th style="width: 9%">
                                            <h4>Description</h4>
                                        </th>
                                        <th style="width: 9%">
                                            <h4>Control No.</h4>
                                        </th>
                                        <th style="width: 9%">
                                            <h4>Serial No.</h4>
                                        </th>
                                        <th style="width: 9%">
                                            <h4>Status</h4>
                                        </th>
                                        <th style="width: 9%">
                                            <h4>Remarks</h4>
                                        </th>
                                        <th style="width: 9%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $counter = 1;
                                        foreach ($item_group as $item) :
                                            if ($item->dept_section == $area->areaID) {
                                                ?>
                                            <tr class="collapse row1 collapse in">
                                                <td><?php echo $counter; ?></td>
                                                <td><?php echo $item->quantity; ?></td>
                                                <td><?php echo $item->unit; ?></td>
                                                <td><?php echo $item->item_name; ?></td>
                                                <td><?php echo $item->brand; ?></td>
                                                <td><?php echo $item->item_description; ?></td>
                                                <td>
                                                    <?php foreach ($items as $item_detail) :
                                                                    if (
                                                                        $item_detail->item_name == $item->item_name
                                                                        &&  $item_detail->item_description == $item->item_description
                                                                        &&  $item_detail->brand == $item->brand
                                                                        &&  $item_detail->model == $item->model
                                                                        &&  $item_detail->dept_section == $item->dept_section
                                                                        &&  $item->control_number != ""
                                                                    ) {
                                                                        ?>
                                                            <label>#<?php echo $item_detail->control_number; ?></label><br>
                                                    <?php }
                                                                endforeach; ?>
                                                </td>
                                                <td> <?php foreach ($items as $item_detail) :
                                                                        if (
                                                                            $item_detail->item_name == $item->item_name
                                                                            &&  $item_detail->item_description == $item->item_description
                                                                            &&  $item_detail->brand == $item->brand
                                                                            &&  $item_detail->model == $item->model
                                                                            &&  $item_detail->dept_section == $item->dept_section
                                                                            &&  $item->serial_number != ""
                                                                        ) {
                                                                            ?>
                                                            <label>#<?php echo $item_detail->serial_number; ?></label><br>
                                                    <?php }
                                                                endforeach; ?></td>
                                                <td>

                                                    <?php foreach ($items as $item_detail) :
                                                                    if (
                                                                        $item_detail->item_name == $item->item_name
                                                                        &&  $item_detail->item_description == $item->item_description
                                                                        &&  $item_detail->brand == $item->brand
                                                                        &&  $item_detail->model == $item->model
                                                                        &&  $item_detail->dept_section == $item->dept_section
                                                                        &&  $item->serial_number != ""
                                                                    ) {
                                                                        ?>
                                                            <label><?php echo $item_detail->status; ?></label><br>
                                                    <?php }
                                                                endforeach; ?></td>
                                                </td>
                                                <td>

                                                    <?php foreach ($items as $item_detail) :
                                                                    if (
                                                                        $item_detail->item_name == $item->item_name
                                                                        &&  $item_detail->item_description == $item->item_description
                                                                        &&  $item_detail->brand == $item->brand
                                                                        &&  $item_detail->model == $item->model
                                                                        &&  $item_detail->dept_section == $item->dept_section
                                                                        &&  $item->serial_number != ""
                                                                    ) {
                                                                        ?>
                                                            <label><?php echo $item_detail->remarks; ?></label><br>
                                                    <?php }
                                                                endforeach; ?>

                                                </td>
                                                <td>
                                                    <div class="dropdown">

                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action<span class="caret"></span>
                                                        </button>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal1<?php echo $counter; ?>">
                                                                Edit
                                                            </button>

                                                            <?php echo form_open('PropertyCust/deleteItem'); ?>
                                                            <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />
                                                            <input type="text" name="deptID" value="<?php echo $item->department; ?>" hidden />
                                                            <button type="submit" class="btn btn-link">Delete</button>
                                                            </form>

                                                            <?php echo form_open('PropertyCust/history_result'); ?>
                                                            <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />
                                                            <button type="submit" class="btn btn-link">View History</button>
                                                            </form>

                                                        </div>
                                                    </div>

                                                    <!--Edit modal-->
                                                    <div class="modal fade" id="exampleModal1<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" style="width:100%" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <?php echo form_open('PropertyCust/edit_item_details'); ?>
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
                                                                                        foreach ($items as $item_d) :
                                                                                            if (
                                                                                                $item->item_name == $item_d->item_name
                                                                                                &&  $item->item_description == $item_d->item_description
                                                                                                &&  $item->brand == $item_d->brand
                                                                                                &&  $item_detail->model == $item_d->model
                                                                                                &&  $item_detail->dept_section == $item_d->dept_section
                                                                                            ) {
                                                                                                ?>
                                                                                    <tr>
                                                                                        <input type="hidden" value="<?php echo $item_d->item_id; ?>" name="itemID[]">
                                                                                        <td><?php echo $count; ?></td>
                                                                                        <td><?php echo $item_d->quantity; ?></td>
                                                                                        <td><input type="text" value="<?php echo $item_d->unit; ?>" name="item_unit[]"></td>
                                                                                        <td><input type="text" value="<?php echo $item_d->item_name; ?>" name="item_name[]"></td>
                                                                                        <td><input type="text" value="<?php echo $item_d->item_description; ?>" name="item_description[]"></td>
                                                                                        <td><input type="text" value="<?php echo $item_d->control_number; ?>" name="item_control[]"></td>
                                                                                        <td><input type="text" value="<?php echo $item_d->serial_number; ?>" name="item_serial[]"></td>
                                                                                        <td><select name="assignedArea[]" id="dept_area" class="form-control">
                                                                                                <option value="">Area</option>
                                                                                                <?php foreach ($areas as $dept_area) :
                                                                                                                        if ($dept_area->deptID == $item_d->department) {
                                                                                                                            ?>
                                                                                                        <option value="<?php echo $dept_area->areaID; ?>" <?php if ($item_d->areaName == $dept_area->areaName) echo "selected"; ?>><?php echo $dept_area->areaName; ?></option>
                                                                                                <?php }
                                                                                                                    endforeach; ?>
                                                                                            </select></td>
                                                                                        <td><input type="text" value="<?php echo $item_d->remarks; ?>" name="item_remarks[]"></td>

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
                                                </td>



                                            </tr>
                                    <?php $counter++;
                                            }

                                        endforeach;
                                        ?>
                                </tbody>
                            </table>

                            <div class="box-footer">
                                <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#addModal<?php echo $area->areaID; ?>">
                                    <i class="glyphicon glyphicon-plus"></i>Add Item
                                </button>
                                <?php echo form_open('PropertyCust/add_item'); ?>
                                <div class="modal fade" id="addModal<?php echo $area->areaID; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" style="width:70%" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-8">
                                                        <h4>Item </h4>
                                                        <input type="text" list="item_selections" class="form-control" name="item" id="item">
                                                        <datalist id="item_selections">
                                                            <?php foreach ($maintenance as $item_s) : ?>
                                                                <option value="<?php echo $item_s->itemName; ?>">
                                                                <?php endforeach; ?>
                                                        </datalist>
                                                    </div>

                                                    <div class="col-lg-3 col-sm-8">
                                                        <h4>Brand</h4>
                                                        <input type="text" list="item_brand" class="form-control" name="brand" id="brand">
                                                        <datalist id="item_brand">

                                                        </datalist>
                                                    </div>

                                                    <div class="col-lg-6 col-sm-8">
                                                        <h4>Model</h4>
                                                        <input type="text" list="item_model" class="form-control" name="model" id="model">
                                                        <datalist id="item_model">

                                                        </datalist>
                                                    </div>

                                                    <div class="col-lg-6 col-sm-8">
                                                        <h4>Description</h4>
                                                        <input type="text" list="item_description" class="form-control" name="description" id="description">
                                                        <datalist id="item_description">

                                                        </datalist>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <h4>Unit</h4>
                                                        <input type="text" class="form-control" placeholder="Unit" name="unit" id="unit">
                                                    </div>


                                                    <div class="col-lg-4 col-sm-4">
                                                        <h4>Quantity</h4>
                                                        <input type="text" class="form-control" placeholder="Quantity" name="quantity" id="quantity">
                                                    </div>

                                                    <div class="col-lg-4 col-sm-4">
                                                        <h4>Control No.</h4>
                                                        <input type="text" class="form-control" placeholder="Control No." name="control_no" id="control_num">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <h4>Serial No.</h4>
                                                        <input type="text" class="form-control" placeholder="Serial No." name="serial_num" id="serial_num">
                                                    </div>

                                                    <div class="col-lg-4 col-sm-4">
                                                        <h4>Remarks</h4>
                                                        <input type="text" class="form-control" placeholder="Remarks" name="remarks" id="remarks">
                                                    </div>
                                                </div>

                                                <div class="box-footer">
                                                    <input type="text" name="deptArea" value="<?php echo $area->areaID; ?>" hidden />
                                                    <input type="text" name="deptID" value="<?php echo $area->deptID; ?>" hidden />
                                                    <button type="submit" class="btn btn-success pull-right">Add</button><br> <br><br><br>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <br><br><br>
                            <?php echo form_open('PropertyCust/Print'); ?>
                            <button class="btn btn-primary hidden-print pull-right"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                            <input type="text" name="deptID" value="<?php echo $dept_choice; ?>" hidden />
                            <input type="text" name="" hidden />
                            <!--JS for Printing-->
                            </form>
                            </div>
                    </div>

                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                    <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
                    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.js'); ?>"></script>
                    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#item').change(function() {
                                var id = $(this).val();
                                $.ajax({
                                    url: "<?php echo site_url('UserRequest/item_brand'); ?>",
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
                                            html += '<option value=' + data[i].brand + '>';
                                        }
                                        $('#item_brand').html(html);

                                    }
                                });
                                return false;
                            });

                        });

                        $(document).ready(function() {
                            $('#item').change(function() {
                                var id = $(this).val();
                                $.ajax({
                                    url: "<?php echo site_url('UserRequest/item_brand'); ?>",
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
                                            html += '<option value=' + data[i].model + '>';
                                        }
                                        $('#item_model').html(html);

                                    }
                                });
                                return false;
                            });

                        });

                        $(document).ready(function() {
                            $('#item').change(function() {
                                var id = $(this).val();
                                $.ajax({
                                    url: "<?php echo site_url('UserRequest/item_brand'); ?>",
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
                                            html += '<option value=' + data[i].itemDescription + '>';
                                        }
                                        $('#item_description').html(html);

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