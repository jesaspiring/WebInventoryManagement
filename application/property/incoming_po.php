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
                <div class = "box box-default">
                    
                    <div class = "box-body">
                <table class="table" id ="table">
                    <!--done-->
                    <thead>
                        <tr>
                            <th style = "width: 25%"><h4>
                                <h4>PO #</h4>
                            </h4></th>
                            <th style = "width: 25%"><h4>
                                <h4>Order Date</h4></h4>
                            </h4></th>
                            <th style = "width: 25%"><h4>
                            </h4></th>
                            <th style = "width: 25%"><h4>
                            </h4></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($po as $purchOrder) :
                            if ($purchOrder->status != "Incomplete Delivery" && $purchOrder->status != "Delivery Complete") {
                                ?>
                                <tr>
                                    <td><?php echo $purchOrder->PO_number; ?></td>
                                    <td><?php echo $purchOrder->order_date; ?></td>
                                    <td>

                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal<?php echo $purchOrder->PO_number; ?>">
                                            View Details
                                        </button>

                                        <!-- Modal -->
                                        <?php echo form_open('PropertyCust/editBeforeEntry'); ?>
                                        <div class="modal fade" id="exampleModal<?php echo  $purchOrder->PO_number; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <!--done-->
                                            <div class="modal-dialog" role="document">
                                                <!--done-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th style = "width: 25%">
                                                                        <h4>Item name</h4>
                                                                    </th>
                                                                    <th style = "width: 25%">
                                                                        <h4>Brand</h4>
                                                                    </th>
                                                                    <th style = "width: 25%">
                                                                        <h4>Description</h4>
                                                                    </th>
                                                                    <th style = "width: 25%">
                                                                        <h4>Unit</h4>
                                                                    </th>
                                                                    <th style = "width: 25%">
                                                                        <h4>Quantity</h4>
                                                                    </th>

                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php foreach ($item as $items) :
                                                                            if ($items->requestID == $purchOrder->request_id) {
                                                                                ?>
                                                                        <tr>
                                                                            <!--done-->
                                                                            <td><?php echo $items->itemName; ?></td>
                                                                            <td><?php echo $items->brand; ?></td>
                                                                            <td><?php echo $items->itemDescription; ?></td>
                                                                            <td><?php echo $items->unit; ?></td>
                                                                            <td><?php echo $items->quantity; ?></td>
                                                                        </tr>

                                                                <?php }
                                                                        endforeach; ?>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                    <!--modal-body-->


                                                    <div class="modal-footer">
                                                        <!--done-->
                                                        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                                <!--modal-footer-->
                                            </div>
                                            <!--/.modal-dialog-->
                                        </div>
                                        <!--/.modal-fade-->
                                        </form>
                                    </td>

                                    <td>

                                        <!--- <?php echo form_open('PropertyCust/po_validation'); ?>
                                        <button type="submit" value="<?php echo  $purchOrder->PO_number; ?>" name="po_number" class="btn btn-primary" data-dismiss="modal">Validate PO</button>
                                        </form>-->

                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#incomplete<?php echo $purchOrder->PO_number; ?>">
                                            Validate PO
                                        </button>


                                        <div class="modal fade" id="incomplete<?php echo  $purchOrder->PO_number; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <!--done-->
                                            <div class="modal-dialog modal-lg" style="width:80%" role="document">
                                                <!--done-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <!--done-->
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th style = "width: 12%">
                                                                        <h4>Item</h4>
                                                                    </th>
                                                                    <th style = "width: 12%">
                                                                        <h4>Brand</h4>
                                                                    </th>
                                                                    <th style = "width: 12%">
                                                                        <h4>Description</h4>
                                                                    </th>
                                                                    <th style = "width: 12%">
                                                                        <h4>Unit</h4>
                                                                    </th>
                                                                    <th style = "width: 12%">
                                                                        <h4>Quantity</h4>
                                                                    </th>

                                                                    <th style = "width: 12%">
                                                                        <h4></h4>
                                                                    </th>
                                                                    <th style = "width: 12%">
                                                                        <h4></h4>
                                                                    </th>
                                
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php echo form_open('PropertyCust/validate_po'); ?>
                                                                <?php foreach ($item as $items) :
                                                                                if ($items->requestID == $purchOrder->request_id) {
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
                                                                                    </select>

                                                                                </td>
                                                                                <td>
                                                                                    <label>Quantity Delivered</label>
                                                                                    <input type="number" class = "form-control" placeholder="Quantity" name="quantity_delivered[]" id="quantity_delivered" value="<?php echo $items->quantity; ?>">
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
                                                        <input type="text" value="<?php echo $purchOrder->PO_number ?>" name="poNum" hidden />
                                                        <input type="text" value="<?php echo $purchOrder->request_id; ?>" name="requestID" hidden />
                                                        <button type="submit" class="btn btn-success">Submit</button>
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

                <script>
                    function defaultChecked() {
                        var check = document.getElementById("complete");
                        for (var i = 0; i < check.length; i++) {
                            check[i].defaultChecked;
                        }
                    }
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

    <!-- DataTables -->
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script>
    $(function() {
      $('#table').DataTable()
      $('#example2').DataTable({
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