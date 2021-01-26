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

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <div class="main-header">
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

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url(); ?>/assets/theme/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
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
              <li><a href="<?php echo base_url('index.php/approval/displayRequestPurchasing') ?>"><i class="fa fa-circle-o"></i>Request List</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="glyphicon glyphicon-list-alt"></i><span>Purchase Order</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('index.php/PurchasingDept/new_po') ?>"><i class="fa fa-circle-o"></i>Create Purchase Order</a></li>
              <li><a href="<?php echo base_url('index.php/PurchasingDept/view_po') ?>"><i class="fa fa-circle-o"></i>View Purchase Order</a></li>
            </ul>
          </li>
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
          <div class="box-body">
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 14%">
                    <h4>Item</h4>
                  </th>
                  <th style="width: 14%">
                    <h4>Brand</h4>
                  </th>
                  <th style="width: 14%">
                    <h4>Model</h4>
                  </th>
                  <th style="width: 16%">
                    <h4>Description</h4>
                  </th>
                  <th style="width: 14%">
                    <h4>Unit</h4>
                  </th>
                  <th style="width: 14%">
                    <h4>Quantity</h4>
                  </th>
                  <th style="width: 14%">
                    <h4>Price per unit</h4>
                  </th>
                  <th style="width: 14%">
                    <h4>Total</h4>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($items as $item) : ?>
                  <td><?php echo $item->itemName; ?></td>
                  <td><?php echo $item->brand; ?></td>
                  <td><?php echo $item->model; ?></td>
                  <td><?php echo $item->itemDescription; ?></td>
                  <td><?php echo $item->unit; ?></td>
                  <td><?php echo $item->quantity; ?></td>
                  <td><?php echo $item->pricePerUnit; ?></td>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="6"></td>
                  <td>
                    <h4>Subtotal:</h4>
                  </td>
                </tr>
              </tfoot>
            </table>

            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#addModal">
              <i class="glyphicon glyphicon-plus"></i> Add Item
            </button>
            <?php echo form_open('PurchasingDept/add_item_po'); ?>
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
              <div class="modal-dialog modal-lg" style="width:70%" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
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
                        <h4>Model</h4>
                        <input type="text" class="form-control" placeholder="Brand" name="brand" id="brand">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-5 col-sm-8">
                        <h4>Description</h4>
                        <input type="text" class="form-control" placeholder="Description" name="description" id="description">
                      </div>

                      <div class="col-lg-3 col-sm-3">
                        <h4>Unit</h4>
                        <select class="form-control" name="unit">
                          <option value="">Unit</option>
                          <?php foreach ($unit as $unit) : ?>
                            <option value="<?php echo $unit->unit_name; ?>"><?php echo $unit->unit_name; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>


                      <div class="col-lg-2 col-sm-4">
                        <h4>Quantity</h4>
                        <input type="text" class="form-control" placeholder="Quantity" name="quantity" id="quantity">
                      </div>


                      <div class="col-lg-2 col-sm-4">
                        <h4>Price Per Unit</h4>
                        <input type="text" class="form-control" placeholder="Price Per Unit" name="price" id="price">
                      </div>
                    </div>

                    <div class="box-footer">
                      <button type="submit" class="btn btn-success pull-right"> <i class="glyphicon glyphicon-plus"></i>Add</button><br> <br><br><br>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="box-footer">
            <?php $attributes = array('onsubmit' => 'return submitRequest()');
            echo form_open('PurchasingDept/po_submit', $attributes);
             ?>
            <button type="submit" class="btn btn-success pull-right"> <i class="glyphicon glyphicon-save"></i> Save</button>
            </form>

            <script>
              function submitRequest() {
                return confirm("Do you want to continue?");
              }
            </script>

          </div>
        </div>

    </div>
  </div>


  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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

  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>