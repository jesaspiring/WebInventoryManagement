<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CPU| Faculty</title>
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
        <div class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url('index.php/page/user') ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">CPU</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>CPU</b> Faculty</span>
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
                            <ul class="dropdown-menu" style="width: 20%">

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
                    <!-- Optionally, you can add icons to the links -->
                    <li><a href="<?php echo base_url('index.php/page/user') ?>"><i class="glyphicon glyphicon-home"></i><span>Home</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-file"></i>
                            <span>Requisition Form</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/UserRequest') ?>"><i class="fa fa-circle-o"></i>Create Request</a></li>
                            <li><a href="<?php echo base_url('index.php/UserRequest/draft_request') ?>"><i class="fa fa-circle-o"></i>Draft Request</a></li>
                            <li><a href="<?php echo base_url('index.php/UserRequest/my_packages') ?>"><i class="fa fa-circle-o"></i></i><span>My Packages</span></a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/UserRequest/trackView') ?>"><i class="glyphicon glyphicon-map-marker"></i><span>My Request</span></a></li>
                    <li><a href="<?php echo base_url('index.php/UserRequest/procurred_items') ?>"><i class="glyphicon glyphicon-list"></i><span>Procured Items</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!--
    <section class="content-header">
      <h1>
        <small>Welcome <?php echo $this->session->userdata('username'); ?></small>
      </h1>
    </section>-->

            <!-- Main content -->
            <section class="content container-fluid">
                <div class="box box-default">
                    <div class="box-body">
                        <div class="form-inline">
                            <div class="form-group mb-2">
                                <label>
                                    <h4>Transaction ID:</h4>
                                </label>
                            </div>
                            <input type="text" class="form-control read-only" name="item" value="<?php echo $requestID; ?>" readonly>
                        </div> <!-- /.col-->

                        <br>
                        <form name="addItem" method="post" action="<?php echo site_url('UserRequest/add_item'); ?>">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>
                                        <h4>Item</h4>
                                    </label>
                                    <input type="text" list="item_selections" class="form-control" value="<?php echo set_value('item'); ?>" name="item" id="item" placeholder="Enter Item">
                                    <datalist id="item_selections">
                                        <?php foreach ($maintenance as $item_s) : ?>
                                            <option value="<?php echo $item_s->itemName; ?>">
                                            <?php endforeach; ?>
                                    </datalist>
                                    <label><?php echo form_error('item'); ?></label>
                                </div>

                                <div class="col-lg-4">
                                    <label>
                                        <h4>Brand</h4>
                                    </label>
                                    <input type="text" list="item_brand" class="form-control" value="<?php echo set_value('brand'); ?>" name="brand" id="brand" placeholder="Enter Brand">
                                    <datalist id="item_brand">

                                    </datalist>
                                    <label><?php echo form_error('brand'); ?></label>
                                </div>

                                <div class="col-lg-4">
                                    <label>
                                        <h4>Model (Optional)</h4>
                                    </label>
                                    <input type="text" list="item_model" class="form-control" value="<?php echo set_value('model'); ?>" name="model" id="model" placeholder="Enter Model">
                                    <datalist id="item_model">

                                    </datalist>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label>
                                        <h4>Description</h4>
                                    </label>
                                    <textarea list="item_description" class="form-control" value="<?php echo set_value('description'); ?>" name="description" id="description" placeholder="Enter Description"></textarea>
                                    <datalist id="item_description">
                                    </datalist>
                                    <label><?php echo form_error('description'); ?></label>
                                </div>

                                <div class="col-lg-3 col-sm-3">
                                    <label>
                                        <h4>Unit</h4>
                                    </label>
                                    <select class="form-control" name="unit">
                                        <option value="<?php echo set_value('unit'); ?>"><?php echo set_value('unit'); ?></option>
                                        <?php foreach ($unit as $unit) : ?>
                                            <option value="<?php echo $unit->unit_name; ?>"><?php echo $unit->unit_name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label><?php echo form_error('unit'); ?></label>
                                </div>

                                <div class="col-lg-3">
                                    <label>
                                        <h4>Quantity</h4>
                                    </label>
                                    <input type="number" class="form-control" value="1" placeholder="Quantity" name="quantity" id="quantity" placeholder="Enter Quantity">

                                </div>
                            </div>
                            <br>
                            <div class="box-footer">
                                <div class="btn-toolbar">
                                    <div class="btn-group pull-right">
                                        <button type="submit" class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i> Add Item</button>
                                    </div>
                        </form>

                        <div class="btn-group pull-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#package">
                                <i class="glyphicon glyphicon-plus-sign"></i>
                                Batch Request
                            </button>
                        </div>

                        <!-- Modal -->
                        <?php echo form_open('UserRequest/add_from_category'); ?>
                        <div class="modal fade" id="package" tabindex="-1" role="dialog" aria-labelledby="packageTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Select Package</h4>
                                    </div> <!-- /. modal-header -->
                                    <div class="modal-body">
                                        <?php foreach ($package as $package) : ?>
                                            <label><input type="radio" value="<?php echo $package->package_id; ?>" name="category" class="minimal"></label> <?php echo $package->package_name; ?><br/>
                                        <?php endforeach; ?>
                                    </div> <!-- /. modal-body -->
                                    <div class="modal-footer">
                                        <div class="btn-toolbar">
                                            <div class="btn-group pull-right">
                                                <button type="submit" class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                            </div>
                                            </form>

                                            <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                                            </div>
                                        </div>
                                        <!--/.btn-toolbar-->
                                    </div> <!-- /. modal-footer -->
                                </div> <!-- /. modal-content -->
                            </div> <!-- /. modal-dialog -->
                        </div> <!-- /. modal fade -->


                    </div>
                    <!--/.btn-toolbar-->
                    <br> <br><br><br>



                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 3%" class="text-center">
                                </th>
                                <th style="width: 7%" class="text-center">
                                    <h4>Item</h4>
                                </th>
                                <th style="width: 7%" class="text-center">
                                    <h4>Brand</h4>
                                </th>
                                <th style="width: 7%" class="text-center">
                                    <h4>Model</h4>
                                </th>
                                <th style="width: 25%" class="text-center">
                                    <h4>Description</h4>
                                </th>
                                <th style="width: 7%" class="text-center">
                                    <h4>Unit</h4>
                                </th>
                                <th style="width: 7%" class="text-center">
                                    <h4>Quantity</h4>
                                </th>
                                <th style="width: 7%" class="text-center">
                                    <h4>Attachment</h4>
                                </th>
                                <th style="width: 15%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($item as $items) :
                                if ($items->requestID == $requestID) {
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" onclick="updateDeleteSelected(this)" value="<?php echo $items->itemID; ?>"></td>
                                        <td><?php echo $items->itemName; ?></td>
                                        <td><?php echo $items->brand; ?></td>
                                        <td><?php echo $items->model; ?></td>
                                        <td><textarea class="form-control" style="border: none;" rows="7"><?php echo $items->itemDescription; ?></textarea></td>
                                        <td><?php echo $items->unit; ?></td>
                                        <td><?php echo $items->quantity; ?></td>
                                        <td>
                                            <?php if ($items->attachment_name != "") { ?>
                                                <a href="<?= base_url() . 'uploads/' . $items->attachment_name; ?>" target="_blank">View Attachment</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <div class="btn-group pull-right">
                                                <?php echo form_open_multipart('UserRequest/do_upload'); ?>
                                                <i class="fa fa-paperclip"></i> Insert Attachment
                                                <input type="file" name="userfile" class="form-control-file"><br />
                                                <input type="submit" name="upload" class="btn btn-secondary">
                                                <p class="text-center"><br><?php echo $this->session->flashdata('msg'); ?></p>
                                                <input type="text" name="itemID" value=<?php echo $items->itemID; ?> hidden />
                                                </form>
                                            </div> <!-- /.btn-group-->

                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning pull-right" data-toggle="modal" data-target="#exampleModal1<?php echo $items->itemID; ?>">
                                                        <i class="glyphicon glyphicon-edit"></i> Edit
                                                    </button>
                                                </div>

                                                <!-- Modal for Edit -->
                                                <?php echo form_open('UserRequest/edit_item'); ?>
                                                <div class="modal fade" id="exampleModal1<?php echo $items->itemID; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <h4>Item </h4>
                                                                        <input type="text" class="form-control" placeholder="Item" name="item" id="item" value="<?php echo $items->itemName; ?>">
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <h4>Brand </h4>
                                                                        <input type="text" class="form-control" placeholder="Brand" name="brand" id="brand" value="<?php echo $items->brand; ?>">
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <h4>Model</h4>
                                                                        <input type="text" class="form-control" placeholder="Model" name="model" id="model" value="<?php echo $items->model; ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <h4>Description</h4>
                                                                        <textarea class="form-control" name="description" id="description"><?php echo $items->itemDescription; ?></textarea>
                                                                    </div>

                                                                    <div class="col-lg-3">
                                                                        <h4>Unit</h4>
                                                                        <input type="text" class="form-control" placeholder="Unit" name="unit" id="unit" value="<?php echo $items->unit; ?>">
                                                                    </div>


                                                                    <div class="col-lg-3">
                                                                        <h4>Quantity</h4>
                                                                        <input type="text" class="form-control" placeholder="Quantity" name="quantity" id="quantity" value="<?php echo $items->quantity; ?>">
                                                                    </div>
                                                                </div>

                                                                <input type="text" name="itemID" value=<?php echo $items->itemID; ?> hidden />

                                                                <div class="box-footer">
                                                                    <div class="btn-toolbar pull-right">
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                                                <i class="ionicons ion-close"></i> Cancel</button>
                                                                        </div>
                                                                        <div class="btn-group">
                                                                            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Save Changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                                <div class="btn-group">
                                                    <?php echo form_open('UserRequest/delete_item'); ?>
                                                    <input type="text" name="itemID" value=<?php echo $items->itemID; ?> hidden />
                                                    <button type="submit" class="btn btn-danger pull-right">
                                                        <i class="glyphicon glyphicon-trash"></i> Delete</button><br> <br><br><br>
                                                </div>
                                            </div>
                                            </form>
                                        </td>
                                    </tr>
                            <?php }
                            endforeach; ?>
                        </tbody>

                    </table>

                    <div class="box-footer">
                        <div class="btn-toolbar">
                            <div class="btn-group pull-right">
                                <?php
                                $attributes = array('onsubmit' => 'return submitRequest()');
                                echo form_open('UserRequest/submit_request', $attributes);
                                ?>
                                <input type="hidden" value="<?php echo $requestID ?>" name="requestID">
                                <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                    Submit
                                </button>
                            </div>
                            </form>

                            <script>
                                function submitRequest() {
                                    return confirm("Do you want to continue?");
                                }
                            </script>

                            <div class="btn-group pull-right">
                                <?php
                                $attributes = array('onsubmit' => 'return selectDelete()');
                                echo form_open('UserRequest/delete_all_item', $attributes); ?>
                                <input type="hidden" name="deleteSelected" id="deleteSelected" />
                                <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>
                                    Delete Selected
                                </button>
                                <script>
                                    function updateDeleteSelected(selectedCheckbox) {

                                        if (selectedCheckbox.checked) {
                                            $("#deleteSelected").val($("#deleteSelected").val() + $(selectedCheckbox).val() + ",");
                                        } else {
                                            $("#deleteSelected").val($("#deleteSelected").val().replace($(selectedCheckbox).val() + ",", ""));
                                        }
                                    }

                                    function selectDelete() {
                                        return confirm("Do you want to continue?");
                                    }
                                </script>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php echo form_open('page/user'); ?>
                <button type="submit" class="btn btn-warning pull-right">
                    <i class="ionicons ion-archive"></i> Draft</button>
                </form>
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

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>