<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Invoice</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/dist/css/AdminLTE.min.css">
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

<body onload="window.print();">
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-xs-2">
                    <img src="<?php echo base_url(); ?>/assets/theme/dist/img/cpu.jpg" style="width: 15% margin-left: 2%">
                </div>
                <div class="col-xs-9">
                    <div class="page-header">
                        <h4>
                            Central Philippine University
                        </h4>
                        <small class="pull-right">Date: 2/10/2014</small>
                        <h4><b>REQUISITION FORM</b></h4>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <br>
            <div class="row invoice-info">
                <div class="col-sm-3 invoice-col">
                    <input type="checkbox" class="minimal">
                    <label>
                        <h5>CASH PAYMENT TO</h5>
                    </label>
                </div>
                <!-- /.col -->
                <div class="col-sm-3 invoice-col">
                    <input type="checkbox" class="minimal">
                    <label>
                        <h5>CASH ADVANCE TO</h5>
                    </label>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row invoice-info">
                <div class="col-sm-3 invoice-col">
                </div>
                <!-- /.col -->
                <div class="col-sm-3 invoice-col">
                    <input type="checkbox" class="minimal">
                    <label>
                        <h5>PURCHASE FROM</h5>
                    </label>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row invoice-info">
                <div class="col-sm-3 invoice-col">
                    PLS CHECK: ___________________________
                </div>
                <!-- /.col -->
                <div class="col-sm-3 invoice-col">
                <input type="checkbox" class="minimal">
                                        <label>
                                            <h5>JOB TO BE DONE BY</h5>
                                        </label>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <br>
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class = "text-center">Item</th>
                                <th class = "text-center">Quantity</th>
                                <th class = "text-center">Unit</th>
                                <th class = "text-center">Description</th>
                                <th class = "text-center">Unit Price</th>
                                <th class = "text-center">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <!-- accepted payments column -->
                <div class="col-xs-3">
                    Acct. No.:__________
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    Acct. Name.:____________________
                </div>
                <!-- /.col -->
                <div class="col-xs-5">
                    Requested by:___________________
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-xs-7">
                    Funds Available: ________________________________________
                </div>
                <!-- /.col -->
                <div class="col-xs-5">
                    Recommending Approval:______________
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-xs-7 text-center">
                    <p>Vice President for Finance and Administration</p>
                </div>
                <!-- /.col -->
                <div class="col-xs-5 text-center">
                    Unit Head
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-xs-7">
                    Approved: ________________________________________
                </div>
                <!-- /.col -->
                <div class="col-xs-5">
                    Purchasing Officer:______________
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-xs-7 text-center">
                    President
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
</body>

</html>