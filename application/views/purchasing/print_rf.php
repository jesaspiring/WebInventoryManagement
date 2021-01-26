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
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/plugins/iCheck/all.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body onload="window.print();">



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content container-fluid">

            <?php $attributes = array('onsubmit' => 'return submitSave()');
            echo form_open('PurchasingDept/update_request', $attributes); ?>
            <div class="box box-default">
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-2 col-xs-2">
                            <img src="<?php echo base_url(); ?>/assets/theme/dist/img/cpu.jpg" style="width: 100px" class="user-image" alt="User Image">
                        </div> <!-- /.col -->

                        <div class="col-lg-6 col-xs-6">
                            <h5><b>Central Philippine University</b><br>
                                Iloilo City, Phillipines</h5>
                            <h4><b>REQUISITION FORM<b>
                                        <h4>
                        </div> <!-- /.col -->

                        <div class="col-lg-4 col-xs-4">
                            <h4>Date: <?php echo $form->date; ?><h4>
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-1 col-xs-1">
                        </div> <!-- /.col -->

                        <div class="col-lg-2 col-xs-2">
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="cash_payment" class="minimal" <?php if ($form->cash_payment_to != "") echo "checked"; ?>>
                                    <label>
                                        <h5>CASH PAYMENT TO</h5>
                                    </label>
                                </label>
                            </div> <!-- /.form-group-->
                        </div> <!-- /.col -->

                        <div class="col-lg-2 col-xs-2">
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="cash_advance" class="minimal" <?php if ($form->cash_advance_to != "") echo "checked"; ?>>
                                    <label>
                                        <h5>CASH ADVANCE TO</h5>
                                    </label>
                                </label>
                            </div> <!-- /.form-group-->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-3 col-xs-3">
                        </div> <!-- /.col -->

                        <div class="col-lg-2 col-xs-2">
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="purchase_from" class="minimal" <?php if ($form->purchase_from != "") echo "checked"; ?>>
                                    <label>
                                        <h5>PURCHASE FROM</h5>
                                    </label>
                                </label>
                            </div> <!-- /.form-group-->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-3 col-xs-3">
                            <br>PLS CHECK ________________
                        </div> <!-- /.col -->

                        <div class="col-lg-2 col-xs-2">
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="job_done" class="minimal" <?php if ($form->job_to_be_done_by != "") echo "checked"; ?>>
                                    <label>
                                        <h5>JOB TO BE DONE BY</h5>
                                    </label>
                                </label>
                            </div> <!-- /.form-group-->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 14%" class="text-center">
                                    <h4>ITEM #</h4>
                                </th>
                                <th style="width: 14%" class="text-center">
                                    <h4>Quantity</h4>
                                </th>
                                <th style="width: 14%" class="text-center">
                                    <h4>Unit</h4>
                                </th>
                                <th style="width: 30%" class="text-center">
                                    <h4>Item/Brand/Model/Description</h4>
                                </th>
                                <th style="width: 14%" class="text-center">
                                    <h4>Unit Price</h4>
                                </th>
                                <th style="width: 14%" class="text-center">
                                    <h4>Amount</h4>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($item as $items) :
                                if ($items->requestID == $form->requestID) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $items->quantity; ?></td>
                                        <td><?php echo $items->unit; ?></td>
                                        <td><?php echo $items->itemName; ?>|<?php echo $items->brand; ?>|<?php echo $items->model; ?>|<?php echo $items->itemDescription; ?></td>

                                        <td><?php echo $items->pricePerUnit; ?></td>
                                        <td></td>
                                    </tr>
                            <?php $no++;
                                }
                            endforeach; ?>
                        </tbody>
                    </table>

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-lg-2 col-xs-3">
                              <h4>Acct. No.: <?php echo $form->account_no; ?></h4> 
                            </div>
                            <!-- /.col -->
                            <div class="col-lg-5 col-xs-4">
                                <h4>Acct. Name.: <?php echo $form->account_name; ?></h4>
                            </div>
                            <!-- /.col -->
                            <div class="col-lg-5 col-xs-5">
                                <h4>Requested by: <?php echo $form->username; ?> </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-lg-7 col-xs-7">

                                <h4>Funds Available: _________________________________________</h4>
                            </div>
                            <!-- /.col -->
                            <div class = "col-lg-5 col-xs-5">
                                        <h4>Recommending Approval: <?php echo $form->unit_head; ?></h4>
                                </div>
                            </div>
                            <!-- /.col -->
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-2 col-xs-2"></div>
                            <div class="col-lg-4 col-xs-4">
                                <small class="text-center"> Vice President for Finance and Administration</small>
                            </div>
                            <div class="col-lg-4 col-xs-4"></div>
                            <div class="col-lg-2 col-xs-2">
                                <small class="text-center"> Unit Head</small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-7 col-xs-7">
                                <h4>Approved: ______________________________________________</h4>
                                <p class="text-center">President</p>
                            </div>
                            <!-- /.col -->
                            <div class="col-lg-5 col-xs-5">
                                <h4>Purchasing Officer: <?php echo $form->purchase_officer; ?></h4>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div> <!-- /.box-body-->
                    </form>
                </div> <!-- /.box box-default-->
        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

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