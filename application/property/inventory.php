<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
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
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">


                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Inventory</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PropertyCust/showDepartment'); ?>"><i class="fa fa-circle-o"></i> View Inventory</a></li>
                            <li><a href="<?php echo base_url('index.php/PropertyCust/physicalCount'); ?>"><i class="fa fa-circle-o"></i> Physical Count</a></li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-edit"></i> <span>History</span>
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

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Report</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PropertyCust/view_rr'); ?>"><i class="fa fa-circle-o"></i> Receiving Report</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Incoming Items</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('index.php/PropertyCust/incoming_items'); ?>"><i class="fa fa-book"></i> <span>Incoming Purchase Order</span></a></li>
                            <li><a href="<?php echo base_url('index.php/PropertyCust/pending_po'); ?>"><i class="fa fa-book"></i> <span>Pending Purchase Order</span></a></li>
                            <li><a href="<?php echo base_url('index.php/PropertyCust/recently_added'); ?>"><i class="fa fa-book"></i> <span>Recently Added Orders</span></a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php echo $this->session->userdata('department') ?>
                    <small>Welcome <?php echo $this->session->userdata('username'); ?></small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="box box-default">
                    <div class="box-header with-border">
                        <h1 class="box-title">Inventory: <?php echo $dept_choice; ?></h1>
                    </div>
                    <!--/. box-header-->
                    <br><br>
                    <div class="container">
                        <div class="row">
                            <!--Department and Area-->
                            <div class="col-md-5">
                                <h4>College/Department</h4>
                                <?php echo form_open('PropertyCust/deptInventory'); ?>
                                <select name="department" id="department" class="form-control">
                                    <option value="">Select Department</option>
                                    <?php foreach ($departments as $department) : ?>
                                        <option value="<?php echo $department->deptID; ?>"><?php echo $department->deptName; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <button type="submit">Search</button>
                                </form>
                            </div>
                            <div class=col-md-2></div>
                        </div>
                    </div>


                    <table class="table table-bordered" id="deptArea">
                        <br>
                        <thead>
                            <tr class="clickable" data-toggle="collapse" id="row1" data-target=".row1">
                                <th colspan="10" class="text-center"><?php echo $dept_choice; ?></th>
                            </tr>
                        </thead>
                        <thead>
                            <tr class="collapse row1 collapse in">
                                <th style="width: 40px">No.</th>
                                <th style="width: 40px">Qty</th>
                                <th style="width: 40px">Unit</th>
                                <th style="width: 40px">Item</th>
                                <th style="width: 70px">Brand</th>
                                <th style="width: 70px">Description</th>
                                <th style="width: 70px">Status</th>
                                <th style="width: 70px">Department Area</th>
                                <th style="width: 70px">Remarks</th>
                                <th style="width: 40px"></th>
                            </tr>
                        </thead>
                        <tbody id="inventory">
                            <?php
                            $counter = 1;
                            foreach ($items as $item) :
                                ?>
                                <tr class="collapse row1 collapse in">
                                    <td><?php echo $counter; ?></td>
                                    <td><?php echo $item->quantity; ?></td>
                                    <td><?php echo $item->unit; ?></td>
                                    <td><?php echo $item->item_name; ?></td>
                                    <td><?php echo $item->brand; ?></td>
                                    <td><?php echo $item->item_description; ?></td>
                                    <td><?php echo $item->status; ?></td>
                                    <td><?php echo $item->areaName; ?></td>
                                    <td><?php echo $item->remarks; ?></td>
                                    <td>
                                        <div class="dropdown">

                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal1<?php echo $item->item_id; ?>">
                                                    View Details
                                                </button>

                                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal<?php echo $item->item_id; ?>">
                                                    Transfer Item
                                                </button>

                                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalrepair<?php echo $item->item_id; ?>">
                                                    Repair Item
                                                </button>

                                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#dispose<?php echo $item->item_id; ?>">
                                                    Dispose Item
                                                </button>

                                                <?php echo form_open('PropertyCust/history_result'); ?>
                                                <input type="text" name="control_num" value="<?php echo $item->control_number; ?>" hidden />
                                                <input type="text" name="serial" value="<?php echo $item->serial_number; ?>" hidden />
                                                <button type="submit" class="btn btn-link">View Details</button>
                                                </form>

                                            </div>
                                        </div>
                                    </td>


                                    <!-- Button modals -->
                                    <div>
                                        <!-- Edit -->
                                        <?php echo form_open('PropertyCust/editInventory'); ?>
                                        <div class="modal fade" id="exampleModal1<?php echo $item->item_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" style="width:70%" role="document">
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
                                                                <input type="text" class="form-control" placeholder="Item" name="item" id="item" value="<?php echo $item->item_name; ?>">
                                                            </div>

                                                            <div class="col-lg-4 col-sm-8">
                                                                <h4>Brand </h4>
                                                                <input type="text" class="form-control" placeholder="Brand" name="brand" id="brand" value="<?php echo $item->brand; ?>">
                                                            </div>

                                                            <div class="col-lg-4 col-sm-8">
                                                                <h4>Description</h4>
                                                                <input type="text" class="form-control" placeholder="Description" name="description" id="description" value="<?php echo $item->item_description; ?>">
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
                                                                <h4>Control No.</h4>
                                                                <input type="text" class="form-control" placeholder="control_num" name="control_num" id="control_num" value="<?php echo $item->control_number; ?>">
                                                            </div>

                                                            <div class="col-lg-2 col-sm-4">
                                                                <h4>Serial No.</h4>
                                                                <input type="text" class="form-control" placeholder="control_num" name="serial" id="control_num" value="<?php echo $item->serial_number; ?>">
                                                            </div>

                                                            <div class="col-lg-2 col-sm-4">
                                                                <h4>Remarks</h4>
                                                                <input type="text" class="form-control" placeholder="remarks" name="remarks" id="remarks" value="<?php echo $item->remarks; ?>">
                                                            </div>
                                                            <div class="col-lg-2 col-sm-4">
                                                                <h4>Status</h4>
                                                                <input type="text" class="form-control" placeholder="status" name="status" id="status" value="<?php echo $item->status; ?>">
                                                            </div>

                                                            <div class="col-lg-2 col-sm-4">
                                                                <select name="area" id="area" class="form-control">
                                                                    <option value="">Area location</option>
                                                                    <?php foreach ($areas as $area) : ?>
                                                                        <option value="<?php echo $area->areaID; ?>"><?php echo $area->areaName; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>

                                                        </div>

                                                        <input type="text" name="itemID" value=<?php echo $item->item_id; ?> hidden />
                                                        <input type="text" name="deptID" value=<?php echo $item->department; ?> hidden />
                                                        <div class="box-footer">
                                                            <button type="submit" class="btn btn-success pull-right">Edit</button><br> <br><br><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>



                                        <!-- Request Repair -->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Modal -->

                                                <div class="modal fade" id="exampleModalrepair<?php echo $item->item_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Item Repair</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>


                                                            <?php if ($item->status != "Under Repair") { ?>
                                                                <?php echo form_open('PropertyCust/repair_item'); ?>
                                                                <div class="modal-body">
                                                                    <input type="text" name="control_no" value="<?php echo $item->control_number; ?>" hidden />
                                                                    <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />

                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <input type="text" name="repair_type" placeholder="Type of Repair" value="">
                                                                            <input type="text" name="repair_loc" placeholder="Repair Location" value="">
                                                                            <input type="text" name="in_charge" placeholder="In Charge" value="">
                                                                            <input type="text" name="remarks" placeholder="Remarks" value="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />
                                                                        <input type="text" name="deptID" value="<?php echo $item->department; ?>" hidden />
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>


                                                            <?php if ($item->status == "Under Repair") { ?>
                                                                <div class="modal-body">
                                                                    <input type="text" name="control_no" value="<?php echo $item->control_number; ?>" hidden />
                                                                    <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />

                                                                    <?php echo form_open('PropertyCust/updateItemRepair'); ?>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <input type="text" name="repair_type" placeholder="Type of Repair" value="<?php echo $repair->repair_type; ?>">
                                                                            <input type="text" name="repair_loc" placeholder="Repair Location" value="<?php echo $repair->repair_location; ?>">
                                                                            <input type="text" name="repair_date" placeholder="Repair Date" value="<?php echo $repair->repair_date; ?>">
                                                                            <input type="text" name="in_charge" placeholder="In Charge" value="<?php echo $repair->in_charge; ?>">
                                                                            <input type="text" name="remarks" placeholder="Remarks" value="<?php echo $repair->remarks; ?>">
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />
                                                                        <input type="text" name="deptID" value="<?php echo $item->department; ?>" hidden />
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                        </form>

                                                                        <?php echo form_open('PropertyCust/markRepairDone'); ?>
                                                                        <input type="text" name="itemID" value="<?php echo $item->item_id; ?>" hidden />
                                                                        <input type="text" name="deptID" value="<?php echo $item->department; ?>" hidden />
                                                                        <button type="submit" class="btn btn-primary">Mark as Done</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Transfer -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- Modal -->
                                            <?php echo form_open('PropertyCust/transferItem'); ?>
                                            <div class="modal fade" id="exampleModal<?php echo $item->item_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    <input type="text" name="deptFrom" value="<?php echo $item->deptName; ?>" readonly></td>
                                                                    <h4>Transfer To: </h4>
                                                                    <select class="form-control" id="select2" name="transferTo">
                                                                        <?php foreach ($departments as $dept) : ?>
                                                                            <option value="<?php echo $dept->deptID ?>"><?php echo $dept->deptName; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                    <h4>Quantity: </h4>
                                                                    <input type="text" name="quantity_transfer" value="<?php echo $item->quantity; ?>"></td>
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
                                        </div>
                                    </div>

                                    <?php echo form_open('PropertyCust/dispose_item');?>
                                    <div class="modal fade" id="dispose<?php echo $item->item_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" style="width:70%" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <link rel="stylesheet" type="text/css" href="comment.css">
                                                    <div class="titleBox">
                                                        <label>Item disposal remarks</label>
                                                    </div>


                                                        <div class="form-group">
                                                            <h4>Remarks</h4>
                                                            <input type="text" class="form-control" placeholder="remarks" name="remarks" id="remarks">
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
                                    </div>
                                    </form>

                                </tr>

                            <?php
                                $counter++;
                            endforeach; ?>
                        </tbody>

                    </table>



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