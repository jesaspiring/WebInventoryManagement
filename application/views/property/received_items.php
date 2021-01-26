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
                    <li><a href="<?php echo base_url('index.php/PropertyCust/search_department_list'); ?>"><i class="ionicons ion-android-list"></i><span> Department</span></a></li>
                    <li><a href="<?php echo base_url('index.php/PropertyCust/chartReport'); ?>"><i class="glyphicon glyphicon-stats"></i><span> Statistics</span></a></li>
                    <li><a href="<?php echo base_url('index.php/PropertyCust/item_log'); ?>"><i class="glyphicon glyphicon-repeat"></i><span> Item History</span></a></li>
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
                        <?php echo form_open('PropertyCust/po_details'); ?>
                        <button type="submit" class="btn btn-link btn-lg" style="color: black">
                            <input type="hidden" value="<?php echo $po_num; ?>" name="poNum">
                            <input type="hidden" value="<?php echo $reqID ?>" name="reqID">
                            <i class="glyphicon glyphicon-backward"></i> Back</button>
                        </form>
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#received_items" data-toggle="tab">Received Items(<?php echo $count_received; ?>)</a></li>
                                <li><a href="#added_to_inventory" data-toggle="tab">Added to Inventory(<?php echo $count_added; ?>)</a></li>
                            </ul>

                            <?php $attributes = array('onsubmit' => 'return submitSave()');
                            echo form_open('PropertyCust/update_received_items', $attributes); ?>
                            <div class="tab-content">
                                <div class="tab-pane active" id="received_items">
                                    <table class="table" id="table1">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%">
                                                    <h4></h4>
                                                </th>
                                                <th style="width: 8%">
                                                    <h4>Item</h4>
                                                </th>
                                                <th style="width: 8%">
                                                    <h4>Brand</h4>
                                                </th>
                                                <th style="width: 8%">
                                                    <h4>Model</h4>
                                                </th>
                                                <th style="width: 25%">
                                                    <h4>Description</h4>
                                                </th>
                                                <th style="width: 8%">
                                                    <h4>Control Number</h4>
                                                </th>
                                                <th style="width: 8%">
                                                    <h4>Serial Number</h4>
                                                </th>

                                                <th style="width: 8%">
                                                    <h4>Date Received</h4>
                                                </th>
                                                <th style="width: 8%">
                                                    <h4>Warranty</h4>
                                                </th>
                                                <th style="width: 8%">
                                                    <h4>Remarks</h4>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $no = 1;
                                            foreach ($received as $received_items) :
                                                if ($reqID == $received_items->item_requestID) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>

                                                        <input type="hidden" name="item_no[]" value="<?php echo $received_items->item_no ?>">
                                                        <td><input type="text" class="form-control" style="width: 80px" name="receivedItemName[]" value="<?php echo $received_items->itemName ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>

                                                        </td>
                                                        <td><input type="text" class="form-control" style="width: 80px" name="receivedItemBrand[]" value="<?php echo $received_items->brand ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>

                                                        </td>
                                                        <td><input type="text" class="form-control" style="width: 80px" name="receivedItemModel[]" value="<?php echo $received_items->model ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>

                                                        </td>
                                                        <td><input type="text" class="form-control" style="width: 100px" name="receivedItemDescription[]" value="<?php echo $received_items->itemDescription ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>

                                                        </td>
                                                        <td><input type="text" class="form-control" style="width: 80px" name="receivedItemControl[]" value="<?php echo $received_items->control_no ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>

                                                        </td>
                                                        <td><input type="text" class="form-control" style="width: 80px" name="receivedItemSerial[]" value="<?php echo $received_items->serial_number ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>

                                                        </td>
                                                        <td><label><?php echo $received_items->date_delivered; ?></label></td>
                                                        <td>
                                                            <input type="text" class="form-control" style="width: 45px" placeholder="yrs" name="receivedWarrantyLength[]" value="<?php echo $received_items->warranty_length ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>
                                                        </td>

                                                        <td>
                                                            <?php if ($received_items->status == "Added to Inventory") { ?>
                                                                <label><?php echo $received_items->status; ?></label>
                                                            <?php } ?>

                                                            <?php if ($received_items->status != "Added to Inventory") { ?>
                                                                <select name="choice[]" id="choice" class="form-control" style="width: 100px">
                                                                    <option value="">Remarks</option>
                                                                    <option value="wrong item" <?php if ($received_items->remarks == "wrong item") echo "selected"; ?>>Wrong Item</option>
                                                                    <option value="substandard" <?php if ($received_items->remarks == "substandard") echo "selected"; ?>>Substandard</option>
                                                                    <option value="replacement" <?php if ($received_items->remarks == "replacement") echo "selected"; ?>>Replacement</option>
                                                                </select>
                                                            <?php } ?>
                                                        </td>

                                                    </tr>
                                            <?php $no++;
                                                }
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success pull-right">
                                            <i class="glyphicon glyphicon-save"></i> Save Changes</button>
                                        </form>



                                        <?php echo form_open('PropertyCust/addToInventory'); ?>
                                        <input type="hidden" value="<?php echo $po_num; ?>" name="poNum">
                                        <input type="hidden" value="<?php echo $reqID ?>" name="requestID">
                                        <button type="submit" class="btn btn-primary pull-left">Add to Inventory</button>
                                        </form>

                                        <script>
                                            function submitSave() {
                                                return confirm("Do you want to continue?");
                                            }
                                        </script>
                                    </div>
                                </div>




                                <script>
                                    function updateDeleteSelected(selectedCheckbox) {

                                        if (selectedCheckbox.checked) {
                                            $("#receivedItemWarranty").val($("#receivedItemWarranty").val() + $(selectedCheckbox).val() + ",");
                                        } else {
                                            $("#receivedItemWarranty").val($("#receivedItemWarranty").val().replace($(selectedCheckbox).val() + ",", ""));
                                        }
                                    }
                                </script>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="added_to_inventory">
                                    <table class="table" id="table2">
                                        <thead>
                                            <tr>
                                                <th style="width: 2%">
                                                    <h4></h4>
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
                                                <th style="width: 12%">
                                                    <h4>Description</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Control Number</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Serial Number</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Warranty</h4>
                                                </th>
                                                <th style="width: 12%">
                                                    <h4>Remarks</h4>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php echo form_open('PropertyCust/update_received_items'); ?>
                                            <?php
                                            $no = 1;
                                            foreach ($received as $received_items) :
                                                if ($reqID == $received_items->item_requestID) {
                                                    if ($received_items->status == "Added to Inventory") {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>

                                                            <input type="hidden" name="item_no[]" value="<?php echo $received_items->item_no ?>">
                                                            <td><input type="text" class="form-control" style="width: 80px" name="receivedItemName[]" value="<?php echo $received_items->itemName ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>

                                                            </td>
                                                            <td><input type="text" class="form-control" style="width: 80px" name="receivedItemBrand[]" value="<?php echo $received_items->brand ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>

                                                            </td>
                                                            <td><input type="text" class="form-control" style="width: 80px" name="receivedItemModel[]" value="<?php echo $received_items->model ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>

                                                            </td>
                                                            <td><input type="text" class="form-control" style="width: 100px" name="receivedItemDescription[]" value="<?php echo $received_items->itemDescription ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>

                                                            </td>
                                                            <td><input type="text" class="form-control" style="width: 80px" name="receivedItemControl[]" value="<?php echo $received_items->control_no ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>

                                                            </td>
                                                            <td><input type="text" class="form-control" style="width: 80px" name="receivedItemSerial[]" value="<?php echo $received_items->serial_number ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>

                                                            </td>
                                                            <td><label><?php echo $received_items->date_delivered; ?></label></td>
                                                            <td>
                                                                <input type="text" class="form-control" style="width: 45px" placeholder="yrs" name="receivedWarrantyLength[]" value="<?php echo $received_items->warranty_length ?>" <?php if ($received_items->status == "Added to Inventory") echo "readonly"; ?>>
                                                            </td>

                                                            <td>
                                                                <?php if ($received_items->status == "Added to Inventory") { ?>
                                                                    <?php echo $received_items->status; ?>
                                                                <?php } ?>

                                                            </td>
                                                        </tr>
                                            <?php $no++;
                                                    }
                                                }
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                    <div class="modal-footer">
                                        <input type="hidden" name="reqID" value="<?php echo $reqID; ?>">
                                        <button type="submit" class="btn btn-primary pull-left">Save Changes</button>
                                        </form>
                                    </div>
                                </div>







                                <script>
                                    function updateDeleteSelected(selectedCheckbox) {

                                        if (selectedCheckbox.checked) {
                                            $("#receivedItemWarranty").val($("#receivedItemWarranty").val() + $(selectedCheckbox).val() + ",");
                                        } else {
                                            $("#receivedItemWarranty").val($("#receivedItemWarranty").val().replace($(selectedCheckbox).val() + ",", ""));
                                        }
                                    }
                                </script>
                            </div>
                            <!-- /.tab-pane -->

                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- nav-tabs-custom -->


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

    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(function() {
            $('#table1').DataTable()
            $('#table2').DataTable({
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