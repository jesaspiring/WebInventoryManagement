<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CPU | Purchasing</title>
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

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <div class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url('index.php/page/purchasing') ?>" class="logo">
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
                    <li><a href="<?php echo base_url('index.php/page/purchasing') ?>"><i class="glyphicon glyphicon-home"></i><span>Home</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i><span>Request</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/create_request') ?>"><i class="fa fa-circle-o"></i>Create Request</a></li>
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/draft_request') ?>"><i class="fa fa-circle-o"></i>Draft Request</a></li>
                            <li><a href="<?php echo base_url('index.php/approval/displayRequestPurchasing') ?>"><i class="fa fa-circle-o"></i>Request List</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/PurchasingDept/view_po') ?>"><i class="glyphicon glyphicon-list-alt"></i><span> Purchase Order<span></a></li>
                    <li><a href="<?php echo base_url('index.php/PurchasingDept/generateReport') ?>"><i class="ionicons ion-android-done-all"></i><span>Accomplishment Report</span></a></li>



                    <!--<li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-file"></i><span>Reports</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i>Generate Report</a></li>
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/generateReport'); ?>"><i class="fa fa-circle-o"></i>All Reports</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i>Summary of Report</a></li>
                          </ul>
                    </li>-->
                    <li class="treeview">
                        <a href="#">
                            <i class="ionicons ion-ios-person"></i><span> Supplier Profiling</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/supplier_profiling'); ?>"><i class="fa fa-circle-o"></i>Create Supplier</a></li>
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/view_supplier'); ?>"><i class="fa fa-circle-o"></i>View Supplier</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/PurchasingDept/archive') ?>"><i class="ionicons ion-archive"></i><span> Archive</span></a></li>

                </ul> <!-- /.sidebar-menu -->
            </section> <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content container-fluid">
                <div class="box box-default">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#all" data-toggle="tab">All(<?php echo $tot_request; ?>)</a></li>
                            <li><a href="#urgent" data-toggle="tab">Urgent(<?php echo $count_urgent; ?>)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="all">
                                <table class="table" id="add_sorting">
                                    <thead>
                                        <tr>
                                            <th style="width: 12%" class="text-center">
                                                <h4>Request ID</h4>
                                            </th>
                                            <th style="width: 12%" class="text-center">
                                                <h4>Items</h4>
                                            </th>
                                            <th style="width: 12%" class="text-center">
                                                <h4>Date Requested</h4>
                                            </th>
                                            <th style="width: 12%" class="text-center">
                                                <h4>Requested By</h4>
                                            </th>
                                            <th style="width: 12%" class="text-center">
                                                <h4>Department</h4>
                                            </th>
                                            <th style="width: 5%"></th>
                                            <th style="width: 10%"></th>
                                            <th style="width: 25%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($requests as $request) : ?>
                                            <tr>
                                                <td><?php echo $request->requestID; ?></td>
                                                <td>

                                                    <?php
                                                        $subject = "";

                                                        foreach ($item as $items) :
                                                            if ($items->requestID == $request->requestID) {
                                                                ?>

                                                            <?php


                                                                        $subject .= $items->itemName . ', ';

                                                                        ?>

                                                    <?php }
                                                        endforeach;

                                                        if (strlen($subject) > 20) {
                                                            $subject = substr($subject, 0, 20);
                                                            echo $subject . '...';
                                                        } else {
                                                            echo substr($subject, 0, strlen($subject) - 2);
                                                        }

                                                        ?>


                                                </td>
                                                <td><?php echo $request->date_requested; ?></td>
                                                <td><?php echo $request->username; ?></td>
                                                <td><?php echo $request->department; ?></td>
                                                <td>
                                                    <div class="btn-toolbar">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#comment<?php echo $request->requestID; ?>" data-toggle="tooltip" data-placement="top" title="Feedback">
                                                                <i class="glyphicon glyphicon-comment" style="color:black"><?php foreach ($comment_count as $c) :
                                                                                                                                    if ($c->requestID == $request->requestID)
                                                                                                                                        echo "(*)"; ?><?php endforeach; ?></i>
                                                            </button>
                                                        </div>

                                                        <!-- Modal for Comment-->
                                                        <?php echo form_open('comment/userComment'); ?>

                                                        <div class="modal fade" id="comment<?php echo $request->requestID; ?>" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="box direct-chat-primary">
                                                                        <div class="box-header with-border">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <!-- Conversations are loaded here -->
                                                                            <div class="direct-chat-messages">
                                                                                <?php foreach ($comment as $other_comment) :
                                                                                        if ($other_comment->requestID == $request->requestID) {
                                                                                            if ($other_comment->userID == $request->userID && $other_comment->replied_to == $userID) {
                                                                                                ?>
                                                                                            <!-- Message. Default to the left -->
                                                                                            <div class="direct-chat-msg">
                                                                                                <div class="direct-chat-info clearfix">

                                                                                                    <span class="direct-chat-name pull-left"><?php echo $other_comment->username; ?></span>
                                                                                                    <span class="direct-chat-timestamp pull-right"><?php echo $other_comment->date ?></span>
                                                                                                </div>
                                                                                                <!-- /.direct-chat-info -->
                                                                                                <img class="direct-chat-img" src="<?php echo base_url(); ?>/assets/theme/dist/img/avatar.png" alt="Message User Image"><!-- /.direct-chat-img -->
                                                                                                <div class="direct-chat-text">
                                                                                                    <?php echo $other_comment->comment; ?>

                                                                                                </div>
                                                                                                <!-- /.direct-chat-text -->
                                                                                            </div>
                                                                                            <!-- /.direct-chat-msg -->
                                                                                            <input type="hidden" name="requestID" value="<?php echo $request->userID; ?>">
                                                                                        <?php }
                                                                                                    if ($other_comment->userID == $userID && $other_comment->replied_to == $request->userID) {
                                                                                                        ?>
                                                                                            <!-- Message to the right -->
                                                                                            <div class="direct-chat-msg right">

                                                                                                <div class="direct-chat-info clearfix">
                                                                                                    <span class="direct-chat-name pull-right"><?php echo $other_comment->username; ?></span>
                                                                                                    <span class="direct-chat-timestamp pull-left"><?php echo $other_comment->date; ?></span>
                                                                                                </div>
                                                                                                <!-- /.direct-chat-info -->
                                                                                                <img class="direct-chat-img" src="<?php echo base_url(); ?>/assets/theme/dist/img/user2-160x160.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                                                                                                <div class="direct-chat-text">
                                                                                                    <?php echo $other_comment->comment; ?>
                                                                                                </div>

                                                                                            <?php } ?>
                                                                                    <?php }
                                                                                        endforeach; ?>
                                                                                    <!-- /.direct-chat-text -->
                                                                                            </div>
                                                                                            <!-- /.direct-chat-msg -->
                                                                            </div>
                                                                            <!--/.direct-chat-messages-->
                                                                            <div class="box-footer">
                                                                                <div class="row">
                                                                                    <div class="col-lg-2"></div>
                                                                                    <div class="col-lg-10">
                                                                                        <div class="input-group" style="width: 100%">
                                                                                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                                                                            <span class="input-group-btn">
                                                                                                <input type="text" name="requestID" value=<?php echo $request->requestID; ?> hidden />
                                                                                                <button type="submit" class="btn btn-primary btn-flat">Send</button>
                                                                                            </span>
                                                                                        </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>

                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-9"></div>
                                                                                    <div class="col-lg-1">
                                                                                        <?php echo form_open('comment/mark_as_read'); ?>
                                                                                        <span class="input-group-btn">
                                                                                            <input type="text" name="requestID" value=<?php echo $request->requestID; ?> hidden />
                                                                                            <button type="submit" class="btn btn-success btn-flat">Mark as Read</button>
                                                                                        </span>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>

                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#view_details<?php echo $request->requestID; ?>">
                                                        View Details
                                                    </button>
                                                    <!-- Modal for View Details-->
                                                    <div class="modal fade" id="view_details<?php echo $request->requestID; ?>" tabindex="-1" role="dialog" aria-labelledby="view_detailsLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document" style="width: 70%">
                                                            <div class="modal-content modal-lg">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <h4 class="modal-title" id="view_detailsLabel">Request ID: <?php echo $request->requestID; ?> </h4>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr class="text-center">
                                                                                <th style="width: 12%">
                                                                                    <h4>Item</h4>
                                                                                </th>
                                                                                <th style="width: 12%">
                                                                                    <h4>Brand</h4>
                                                                                </th>
                                                                                <th style="width: 12%">
                                                                                    <h4>Model</h4>
                                                                                </th>
                                                                                <th style="width: 25%">
                                                                                    <h4>Description</h4>
                                                                                </th>
                                                                                <th style="width: 12%">
                                                                                    <h4>Unit</h4>
                                                                                </th>
                                                                                <th style="width: 12%">
                                                                                    <h4>Quantity</h4>
                                                                                </th>
                                                                                <th style="width: 12%">
                                                                                    <h4>Attachment</h4>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php foreach ($requestItems as $items) :
                                                                                    if ($items->requestID == $request->requestID) {
                                                                                        ?>
                                                                                    <tr>
                                                                                        <td><?php echo $items->itemName; ?></td>
                                                                                        <td><?php echo $items->brand; ?></td>
                                                                                        <td><?php echo $items->model; ?></td>
                                                                                        <td><textarea class="form-control" style="border: none;" rows="5"><?php echo $items->itemDescription; ?></textarea></td>
                                                                                        <td><?php echo $items->unit; ?></td>
                                                                                        <td><?php echo $items->quantity; ?></td>
                                                                                        <td><?php echo $items->pricePerUnit; ?></td>
                                                                                    </tr>
                                                                            <?php }
                                                                                endforeach; ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-success pull-right" data-dismiss="modal">OK</button>

                                                                    <?php echo form_open('PurchasingDept/requisitionForm'); ?>
                                                                    <input type="hidden" value="<?php echo $request->requestID; ?>" name="requestID">
                                                                    <button type="submit" class="btn btn-primary pull-left">
                                                                        <i class="ionicons ion-eye"></i> View Requisition Form</button>
                                                                    </form>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                            </div>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <?php echo $request->status; ?> <br>
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <span class="caret"></span>
                                    </button>
                                    <?php
                                        $attributes = array('onsubmit' => 'return submitRequest()');
                                        if ($request->status == "Pending Approval Purchasing") {
                                            ?>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                            <?php echo form_open('approval/purchasingApproveRequest', $attributes) ?>
                                            <button type="submit" class="btn btn-link">Approve</button>
                                            <input type="text" name="reqID" value=<?php echo $request->requestID; ?> hidden />
                                            <input type="text" name="itemID" value=<?php echo $items->itemID; ?> hidden />
                                            </form>
                                            <script>
                                                function submitRequest() {
                                                    return confirm("Do you want to continue?");
                                                }
                                            </script>

                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal2<?php echo $request->requestID; ?>">
                                                Return to Requisitioner
                                            </button>

                                        </div>
                                    <?php } ?>


                                    <?php
                                        if ($request->status == "Approved by Purchasing") {
                                            ?>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                            <?php echo form_open('PurchasingDept/canvass') ?>
                                            <button type="submit" class="btn btn-link">Process Canvass Form</button>
                                            <input type="text" name="reqID" value=<?php echo $request->requestID; ?> hidden />
                                            <input type="text" name="itemID" value=<?php echo $items->itemID; ?> hidden />
                                            </form>

                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal2<?php echo $request->requestID; ?>">
                                                Return to Requisitioner
                                            </button>
                                        </div>
                                    <?php } ?>

                                    <?php if (
                                            $request->status == "Processing" || $request->status == "Canvassing" || $request->status == "PO Prepared" || $request->status == "Ordered"
                                            || $request->status == "Edited by Requisitioner"
                                        ) { ?>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                            <?php echo form_open('PurchasingDept/print_canvass') ?>
                                            <button type="submit" class="btn btn-link">Print Canvass Form</button>
                                            <input type="text" name="reqID" value=<?php echo $request->requestID; ?> hidden />
                                            <input type="text" name="itemID" value=<?php echo $items->itemID; ?> hidden />
                                            </form>

                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal2<?php echo $request->requestID; ?>">
                                                Return to Requisitioner
                                            </button>

                                            <?php echo form_open('PurchasingDept/processPO') ?>
                                            <button type="submit" class="btn btn-link">Process PO</button>
                                            <input type="text" name="reqID" value=<?php echo $request->requestID; ?> hidden />
                                            <input type="text" name="itemID" value=<?php echo $items->itemID; ?> hidden />
                                            </form>

                                        <?php } ?>
                                        </div>

                                </div>

                                <div class="modal fade" id="exampleModal2<?php echo $request->requestID; ?>" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <?php
                                                    $attributes = array('onsubmit' => 'return submitDecline()');
                                                    echo form_open("approval/declineRequestPurchasing", $attributes);
                                                    ?>
                                                <div class="user-panel">
                                                    <div class="pull-left image">
                                                        <img src="<?php echo base_url(); ?>/assets/theme/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <div class="pull-left">
                                                        <input type="text" name="requestID" value=<?php echo $request->requestID; ?> hidden />
                                                        <div class="form-group" style="width: 400px">
                                                            <input class="form-control input-lg" name="comment" type="text" placeholder="Your comments" style="width: 100%" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success pull-right">
                                                    <i class="fa fa-check"></i>
                                                    Submit
                                                </button>
                                            </div>
                                            </form>

                                            <script>
                                                function submitDecline() {
                                                    return confirm("Do want to continue?");
                                                }
                                            </script>
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
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="urgent">
                        <table class="table" id="urgent_sorting">
                            <thead>
                                <tr>
                                    <th style="width: 14%" class="text-center">
                                        <h4>Request ID</h4>
                                    </th>
                                    <th style="width: 14%" class="text-center">
                                        <h4>Items</h4>
                                    </th>
                                    <th style="width: 14%" class="text-center">
                                        <h4>Date Requested</h4>
                                    </th>
                                    <th style="width: 14%" class="text-center">
                                        <h4>Requested By</h4>
                                    </th>
                                    <th style="width: 14%" class="text-center">
                                        <h4>Department</h4>
                                    </th>
                                    <th style="width: 7%"></th>
                                    <th style="width: 10%"></th>
                                    <th style="width: 16%"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($requests as $request) :
                                    if ($request->request_type == "urgent") {
                                        ?>
                                        <tr>
                                            <td><?php echo $request->requestID; ?><br />
                                                <label><?php echo $request->request_type; ?></label>
                                            </td>
                                            <td>

                                                <?php
                                                        $subject = "";

                                                        foreach ($item as $items) :
                                                            if ($items->requestID == $request->requestID) {
                                                                ?>

                                                        <?php


                                                                        $subject .= $items->itemName . ', ';

                                                                        ?>

                                                <?php }
                                                        endforeach;

                                                        if (strlen($subject) > 20) {
                                                            $subject = substr($subject, 0, 20);
                                                            echo $subject . '...';
                                                        } else {
                                                            echo substr($subject, 0, strlen($subject) - 2);
                                                        }

                                                        ?>


                                            </td>
                                            <td><?php echo $request->date_requested; ?></td>
                                            <td><?php echo $request->username; ?></td>
                                            <td><?php echo $request->department; ?></td>
                                            <td>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#comment<?php echo $request->requestID; ?>" data-toggle="tooltip" data-placement="top" title="Feedback">
                                                            <i class="glyphicon glyphicon-comment" style="color:black"></i>
                                                        </button>
                                                    </div>

                                                    <!-- Modal for Comment-->
                                                    <?php echo form_open('comment/userComment'); ?>

                                                    <div class="modal fade" id="comment<?php echo $request->requestID; ?>" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="box direct-chat-primary">
                                                                    <div class="box-header with-border">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- Conversations are loaded here -->
                                                                        <div class="direct-chat-messages">
                                                                            <?php foreach ($comment as $other_comment) :
                                                                                        if ($other_comment->requestID == $request->requestID) {

                                                                                            if ($other_comment->userID == $request->userID && $other_comment->replied_to == $userID) {
                                                                                                ?>
                                                                                        <!-- Message. Default to the left -->
                                                                                        <div class="direct-chat-msg">
                                                                                            <div class="direct-chat-info clearfix">

                                                                                                <span class="direct-chat-name pull-left"><?php echo $other_comment->username; ?></span>
                                                                                                <span class="direct-chat-timestamp pull-right"><?php echo $other_comment->date ?></span>
                                                                                            </div>
                                                                                            <!-- /.direct-chat-info -->
                                                                                            <img class="direct-chat-img" src="<?php echo base_url(); ?>/assets/theme/dist/img/avatar.png" alt="Message User Image"><!-- /.direct-chat-img -->
                                                                                            <div class="direct-chat-text">
                                                                                                <?php echo $other_comment->comment; ?>

                                                                                            </div>
                                                                                            <!-- /.direct-chat-text -->
                                                                                        </div>
                                                                                        <!-- /.direct-chat-msg -->
                                                                                        <input type="hidden" name="requestID" value="<?php echo $request->userID; ?>">
                                                                                    <?php }
                                                                                                    if ($other_comment->userID == $userID && $other_comment->replied_to == $request->userID) {
                                                                                                        ?>
                                                                                        <!-- Message to the right -->
                                                                                        <div class="direct-chat-msg right">

                                                                                            <div class="direct-chat-info clearfix">
                                                                                                <span class="direct-chat-name pull-right"><?php echo $other_comment->username; ?></span>
                                                                                                <span class="direct-chat-timestamp pull-left"><?php echo $other_comment->date; ?></span>
                                                                                            </div>
                                                                                            <!-- /.direct-chat-info -->
                                                                                            <img class="direct-chat-img" src="<?php echo base_url(); ?>/assets/theme/dist/img/user2-160x160.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                                                                                            <div class="direct-chat-text">
                                                                                                <?php echo $other_comment->comment; ?>
                                                                                            </div>

                                                                                        <?php } ?>
                                                                                <?php }
                                                                                        endforeach; ?>
                                                                                <!-- /.direct-chat-text -->
                                                                                        </div>
                                                                                        <!-- /.direct-chat-msg -->
                                                                        </div>
                                                                        <!--/.direct-chat-messages-->
                                                                        <div class="box-footer">
                                                                            <div class="row">
                                                                                <div class="col-lg-2"></div>
                                                                                <div class="col-lg-10">
                                                                                    <div class="input-group" style="width: 100%">
                                                                                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                                                                        <span class="input-group-btn">
                                                                                            <input type="text" name="requestID" value=<?php echo $request->requestID; ?> hidden />
                                                                                            <button type="submit" class="btn btn-primary btn-flat">Send</button>
                                                                                        </span>
                                                                                    </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#view_details<?php echo $request->requestID; ?>">
                                                    View Details
                                                </button>
                                                <!-- Modal for View Details-->
                                                <div class="modal fade" id="view_details<?php echo $request->requestID; ?>" tabindex="-1" role="dialog" aria-labelledby="view_detailsLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document" style="width: 70%">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="view_detailsLabel">Request ID: <?php echo $request->requestID; ?> </h4>
                                                            </div>

                                                            <div class="modal-body">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr class="text-center">
                                                                            <th style="width: 11%">
                                                                                <h4>Item</h4>
                                                                            </th>
                                                                            <th style="width: 11%">
                                                                                <h4>Brand</h4>
                                                                            </th>
                                                                            <th style="width: 11%">
                                                                                <h4>Model</h4>
                                                                            </th>
                                                                            <th style="width: 12%">
                                                                                <h4>Description</h4>
                                                                            </th>
                                                                            <th style="width: 11%">
                                                                                <h4>Unit</h4>
                                                                            </th>
                                                                            <th style="width: 11%">
                                                                                <h4>Quantity</h4>
                                                                            </th>
                                                                            <th style="width: 11%">
                                                                                <h4>Attachment</h4>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <?php foreach ($requestItems as $items) :
                                                                                    if ($items->requestID == $request->requestID) {
                                                                                        ?>
                                                                                <tr>
                                                                                    <td><?php echo $items->itemName; ?></td>
                                                                                    <td><?php echo $items->brand; ?></td>
                                                                                    <td><?php echo $items->model; ?></td>
                                                                                    <td><?php echo $items->itemDescription; ?></td>
                                                                                    <td><?php echo $items->unit; ?></td>
                                                                                    <td><?php echo $items->quantity; ?></td>
                                                                                    <td><?php echo $items->pricePerUnit; ?></td>
                                                                                </tr>
                                                                        <?php }
                                                                                endforeach; ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-success pull-right" data-dismiss="modal">OK</button>

                                                                <?php echo form_open('PurchasingDept/requisitionForm'); ?>
                                                                <input type="hidden" value="<?php echo $request->requestID; ?>" name="requestID">
                                                                <button type="submit" class="btn btn-primary pull-left">
                                                                    <i class="ionicons ion-eye"></i> View Requisition Form</button>
                                                                </form>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                    </div>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <?php echo $request->status; ?> <br>
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <?php
                                    $attributes = array('onsubmit' => 'return submitRequest()');
                                    if ($request->status == "Pending Approval Purchasing") {
                                        ?>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                    <?php echo form_open('approval/purchasingApproveRequest', $attributes) ?>
                                    <button type="submit" class="btn btn-link">Approve</button>
                                    <input type="text" name="reqID" value=<?php echo $request->requestID; ?> hidden />
                                    <input type="text" name="itemID" value=<?php echo $items->itemID; ?> hidden />
                                    </form>
                                    <script>
                                        function submitRequest() {
                                            return confirm("Do you want to continue?");
                                        }
                                    </script>

                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal2<?php echo $request->requestID; ?>">
                                        Return to Requisitioner
                                    </button>

                                </div>
                            <?php } ?>


                            <?php
                                    if ($request->status == "Approved by Purchasing") {
                                        ?>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                    <?php echo form_open('PurchasingDept/canvass') ?>
                                    <button type="submit" class="btn btn-link">Process Canvass Form</button>
                                    <input type="text" name="reqID" value=<?php echo $request->requestID; ?> hidden />
                                    <input type="text" name="itemID" value=<?php echo $items->itemID; ?> hidden />
                                    </form>

                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal2<?php echo $request->requestID; ?>">
                                        Return to Requisitioner
                                    </button>
                                </div>
                            <?php } ?>

                            <?php if ($request->status == "Processing" || $request->status == "Canvassing") { ?>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                    <?php echo form_open('PurchasingDept/print_canvass') ?>
                                    <button type="submit" class="btn btn-link">Print Canvass Form</button>
                                    <input type="text" name="reqID" value=<?php echo $request->requestID; ?> hidden />
                                    <input type="text" name="itemID" value=<?php echo $items->itemID; ?> hidden />
                                    </form>

                                    <?php echo form_open('PurchasingDept/processPO') ?>
                                    <button type="submit" class="btn btn-link">Process PO</button>
                                    <input type="text" name="reqID" value=<?php echo $request->requestID; ?> hidden />
                                    <input type="text" name="itemID" value=<?php echo $items->itemID; ?> hidden />
                                    </form>

                                <?php } ?>
                                </div>

                        </div>

                        <div class="modal fade" id="exampleModal2<?php echo $request->requestID; ?>" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <?php
                                                $attributes = array('onsubmit' => 'return submitDecline()');
                                                echo form_open("approval/declineRequestPurchasing", $attributes);
                                                ?>
                                        <div class="user-panel">
                                            <div class="pull-left image">
                                                <img src="<?php echo base_url(); ?>/assets/theme/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <div class="pull-left">
                                                <input type="text" name="requestID" value=<?php echo $request->requestID; ?> hidden />
                                                <div class="form-group" style="width: 400px">
                                                    <input class="form-control input-lg" name="comment" type="text" placeholder="Your comments" style="width: 100%" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success pull-right">
                                            <i class="fa fa-check"></i>
                                            Submit
                                        </button>
                                    </div>
                                    </form>

                                    <script>
                                        function submitDecline() {
                                            return confirm("Do want to continue?");
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                </div>
                </td>
                </tr>

        <?php }
        endforeach; ?>
        </tbody>


        </table>
        </div>
        <!-- /.tab-pane -->

    </div>
    <!-- /.tab-content -->
    </div>
    <!-- nav-tabs-custom -->

    </div>
    </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

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

    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(function() {
            $('#add_sorting').DataTable()
            $('#urgent_sorting').DataTable()
            $('#cash_advance_sorting').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
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