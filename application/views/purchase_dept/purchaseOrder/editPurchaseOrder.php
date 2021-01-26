<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!--Add Row-->
    <meta charset="windows-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!--PRINTING-->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
        <script type="text/javascript">
            //Address
            $(document).ready(function() {
                $('#supplier').change(function() {
                    $.post('show_address', {
                        supplier: $(this).val()
                    }, function(data) {
                        $('#address').val(data);
                    });
                });
            });

            //Contact
            $(document).ready(function() {
                $('#supplier').change(function() {
                    $.post('show_contact', {
                        supplier: $(this).val()
                    }, function(data) {
                        $('#contact').val(data);
                    });
                });
            });

            //date
            $(function() {
                $('#datepicker').datepicker();
            });

            var supplier = $('#supplier').val();
            $.post('forTest/print', {
                supplier: supplier
            });

            /*
                    $('#supplier').change(function(){
                        var address = $('#supplier').val();
                        $.post('forTest/createPurchaseOrder', {supplier:address}, function(data){
                            $('#address').val(address);
                        }); 
                    });
            });*/
        </script>


        <header class="main-header">
            <!-- Logo -->
            <a href="../user.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">CPU</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>CPU</b>Purchasing</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">Jesiah Aguilar</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Jesiah Aguilar - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Jesiah Aguilar</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Request</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/createRequest')?>"><i class="fa fa-circle-o"></i>Create Request</a></li>
                            <li><a href="<?php echo base_url('index.php/approval/displayRequestPurchasing')?>"><i class="fa fa-circle-o"></i>Request List</a></li>
            
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Purchase Order</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PurchasingDept')?>"><i class="fa fa-circle-o"></i>Create Purchase Order</a></li>
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/view_po')?>"><i class="fa fa-circle-o"></i>Purchase Orders</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Reports</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PurchasingDept/generateReport');?>"><i class="fa fa-book"></i> <span>Accomplishment Report</span></a></li>
                            
                        </ul>
                    </li>


                </ul>

                <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!--Requisition Form CSS-->
                <link rel="stylesheet" href="../bower_components/RequisitionForm/RequisitionFormCSS.css">
                <!--JQuery-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="test.js" type="text/javascript"></script>




                <div class="box box-default">
                    <div class="box-header with-border">
                        <h1 class="box-title">Purchase Order Form</h1>

                        <!--Date:-->
                        <!--<h5 id="demo" class="pull-right"></h5><br><br>
<p class="pull-right">Date</p>
<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();
</script>
</div>
-->
                        <!--End of Date-->


                        <!--Start of Table -->
                        <br><br>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo form_open('PurchasingDept/updatePurchaseOrder'); ?>
                                    <h4>Supplier: </h4>
                                    <select class="form-control" name="supplier" id="supplier">
                                        <option selected="disabled"><?php echo $supplier->supplierName; ?></option>
                                        <?php foreach ($po_supplier as $supplier) : ?>
                                            <option value="<?php echo $supplier->supplierName; ?>"><?php echo $supplier->supplierName; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <h4>P.O.Number</h4>
                                    <input type="text" name="po_number" value="<?php echo $po_details->PO_number; ?>" class="form-control" placeholder="Purchase Order Number" readonly>
                                </div>


                                <div class="col-lg-12">
                                    <h4>Address</h4>
                                    <input type="text" name="address" value="<?php echo $supplier->supplierAddress; ?>" id="address" class="form-control" placeholder="Address">
                                </div>

                                <div class="col-lg-12">
                                    <h4>Tel. #, Fax #:</h4>
                                    <input type="text" name="contact" value="<?php echo $supplier->phone_no; ?>" id="contact" class="form-control" placeholder="Tel. #, Fax #">
                                </div>

                                <div class="col-lg-6">
                                    <h4>Credit Terms: </h4>
                                    <input type="text" name="credit" value="<?php echo $po_details->credit_terms; ?>" class="form-control" placeholder="Credit Terms">
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <h4><label>Order Date</label></h4>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" name="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                            </form>

                            <!--Table Details-->

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h4>Item</h4>
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
                                        <th>
                                            <h4>Price per unit</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($items as $item) :
                                        if ($item->requestID == $po_details->request_id) {
                                            ?>
                                            <tr>
                                                <td><?php echo $item->itemName; ?></td>
                                                <td><?php echo $item->itemDescription; ?></td>
                                                <td><?php echo $item->unit; ?></td>
                                                <td><?php echo $item->quantity; ?></td>
                                                <td><?php echo $item->pricePerUnit;?></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal1<?php echo $item->itemID; ?>">
                                                        Edit
                                                    </button>

                                                    <?php echo form_open('PurchasingDept/edit_item'); ?>
                                                    <div class="modal fade" id="exampleModal1<?php echo $item->itemID; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <link rel="stylesheet" type="text/css" href="comment.css">
                                                                    <div class="titleBox">
                                                                        <label>Comment Section</label>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-sm-8">
                                                                            <h4>Item </h4>
                                                                            <input type="text" class="form-control" placeholder="Item" name="item" id="item" value="<?php echo $item->itemName; ?>">
                                                                        </div>

                                                                        <div class="col-lg-4 col-sm-8">
                                                                            <h4>Brand</h4>
                                                                            <input type="text" class="form-control" placeholder="Brand" name="brand" id="brand" value="<?php echo $item->brand; ?>">
                                                                        </div>

                                                                        <div class="col-lg-4 col-sm-8">
                                                                            <h4>Description</h4>
                                                                            <input type="text" class="form-control" placeholder="Description" name="description" id="description" value="<?php echo $item->itemDescription; ?>">
                                                                        </div>

                                                                        <div class="col-lg-2 col-sm-4">
                                                                            <h4>Unit</h4>
                                                                            <input type="text" class="form-control" placeholder="Unit" name="unit" id="unit" value="<?php echo $item->unit; ?>">
                                                                        </div>


                                                                        <div class="col-lg-2 col-sm-4">
                                                                            <h4>Quantity</h4>
                                                                            <input type="text" class="form-control" placeholder="Quantity" name="quantity" id="quantity" value="<?php echo $item->quantity; ?>">
                                                                        </div>

                                                                        <div class="col-lg-2 col-sm-4">
                                                                            <h4>Price per Unit</h4>
                                                                            <input type="text" class="form-control" placeholder="Price" name="price" id="price" value="<?php echo $item->pricePerUnit; ?>">
                                                                        </div>
                                                                    </div>

                                                                    <input type="text" name="itemID" value=<?php echo $item->itemID; ?> hidden />
                                                                    <input type="text" name="reqID" value=<?php echo $item->requestID; ?> hidden />
                                                                    <input type="text" name="poNum" value=<?php echo $po_details->PO_number; ?> hidden />
                                                                    <div class="box-footer">
                                                                        <button type="submit" class="btn btn-success pull-right">Edit</button><br> <br><br><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </td>

                                                <td>
                                                    <?php echo form_open('PurchasingDept/delete_item'); ?>
                                                    <input type="text" name="itemID" value=<?php echo $item->itemID; ?> hidden />
                                                    <input type="text" name="reqID" value=<?php echo $item->requestID; ?> hidden />
                                                    <input type="text" name="poNum" value=<?php echo $po_details->PO_number; ?> hidden />
                                                    <button type="submit" class="btn btn-success pull-right">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    endforeach; ?>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <!--End of Container-->

                        <!--Printing button-->
                        <div class="box-footer">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                Add Item
                            </button>
                            <?php echo form_open('PurchasingDept/add_item'); ?>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <link rel="stylesheet" type="text/css" href="comment.css">
                                            <div class="titleBox">
                                                <label>Comment Section</label>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4 col-sm-8">
                                                    <h4>Item </h4>
                                                    <input type="text" class="form-control" placeholder="Item" name="item" id="item">
                                                </div>
                                                <div class="col-lg-4 col-sm-8">
                                                    <h4>Brand</h4>
                                                    <input type="text" class="form-control" placeholder="Brand" name="brand" id="brand">
                                                </div>
                                                <div class="col-lg-4 col-sm-8">
                                                    <h4>Description</h4>
                                                    <input type="text" class="form-control" placeholder="Description" name="description" id="description">
                                                </div>

                                                <div class="col-lg-2 col-sm-4">
                                                    <h4>Unit</h4>
                                                    <input type="text" class="form-control" placeholder="Unit" name="unit" id="unit">
                                                </div>


                                                <div class="col-lg-2 col-sm-4">
                                                    <h4>Quantity</h4>
                                                    <input type="text" class="form-control" placeholder="Quantity" name="quantity" id="quantity">
                                                </div>

                                                <div class="col-lg-2 col-sm-4">
                                                    <h4>Price per unit</h4>
                                                    <input type="text" class="form-control" placeholder="Quantity" name="price" id="price">
                                                </div>
                                            </div>

                                            <div class="box-footer">
                                                <input type="text" name="poNumber" value="<?php echo $po_number; ?>" hidden />
                                                <button type="submit" class="btn btn-success pull-right">Add</button><br> <br><br><br>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--JS for Printing
          <script>
            function myFunction() {
              window.print();
            }
          </script>-->
                        </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url();?>/assets/theme/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>/assets/theme/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>/assets/theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url();?>/assets/theme/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>/assets/theme/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>/assets/theme/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>/assets/theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>/assets/theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>/assets/theme/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>/assets/theme/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>/assets/theme/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>/assets/theme/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>/assets/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>/assets/theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>/assets/theme/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/theme/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>/assets/theme/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>/assets/theme/dist/js/demo.js"></script>
</body>

</html>