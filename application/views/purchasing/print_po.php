<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Invoice</title>
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
      <!-- header row-->
      <div class="row">
        <div class = "col-xs-2">
        <img src="<?php echo base_url(); ?>/assets/theme/dist/img/cpu.jpg">
        </div>
        <div class="col-xs-4">
          <h4 class="page-header">
            <strong>CENTRAL PHILIPPINES UNIVERSITY</strong>
            <small>Jaro, Iloilo City</small>
            <small>Tel. No.: (033) 329-1971 <i>local </i>2151 * Fax No.: (033) 329-1661</small>
        </div> <!-- /.col 8-->
        <div class="col-xs-4">
          <h3><strong class="pull-right">PURCHASE ORDER</strong></h3><br><br>
          <small class="pull-right">CPU PUR Form 06</small><br>
          <small class="pull-right">Rev. 1 Aug. 2016</small>
          </h4>
        </div> <!-- /.col 4-->
      </div>
      <!--/.row-->

<?php echo form_open('forTest/print');?>
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-info">
          Supplier: <?php echo $supplier->supplierName;?><br>
          Address: <?php echo $supplier->supplierAddress;?><br>
          Tel. #:, Fax #: <?php echo $supplier->phone_no;?> <br>
          Credit Terms: <?php echo $po_details->credit_terms;?> <br>
        </div> <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          P.O Number:  <?php echo $po_details->PO_number;?><br><br><br>
          Order Date:  <?php echo $po_details->order_date;?>
        </div> <!-- /.col -->
      </div> <!-- /.row -->
      <br><i>Please supply us withing (<?php echo $po_details->delivery_time;?>) calendar days after reciept of this Purchase Order with the article/s listed belows:</i><br>
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
              <h4>Price Per Unit</h4>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($item as $items) :
          if($items->requestID == $po_details->request_id){
            ?>
            <tr>
              <td><?php echo $items->itemName; ?></td>
              <td><?php echo $items->brand; ?></td>
              <td><?php echo $items->itemDescription; ?></td>
              <td><?php echo $items->unit; ?></td>
              <td><?php echo $items->quantity; ?></td>
              <td><?php echo $items->pricePerUnit;?></td>
            </tr>
          <?php }
        endforeach; ?>
          </tr>
        </tbody>

        <tfoot>
          <tr>
            <td colspan=5></td>
            <td>
              <h4>Total: P<?php echo $po_total; ?> </h4>
            </td>
          </tr>
        </tfoot>
      </table>
      <!--row-->
      </form>

      <br><br>
      <div class="row">
        <div class="col-sm-4 invoice-col">
          <hr class="style1">
          <p class="text-center">Purchasing Officer</p>
        </div>
        <!--/.col-->

        <div class="col-sm-4 invoice-col">
          <hr class="style1">
          <p class="text-center">Vice President for Finance and Administration</p>
        </div>
        <!--/.col-->

        <div class="col-sm-4 invoice-col">
          <hr class="style1">
          <p class="text-center">President</p>
        </div>
        <!--/.col-->
      </div>
      <!--/.row-->
      <!--row-->
      <div class="row">
        <div class="col-xs-7">
          <br>
          <strong><u>Subject to the following terms and conditions:</u></strong>
          We hereby declare it to be known to and accepted by us that in
          case of failure, delay, or defect in the delivery of the article(s)
          covered by this order within the period specified in the letter of
          accreditation shall give the Univerisity the right to cancel this order.
        </div>
        <!--/.col7-->
        <div class="col-xs-5">
          <strong class="text-right">I hereby agree in full to the above terms and conditions:</strong>
          <br><br><br>
          <hr class="style1">
          <p class="text-center">Authorized Signature of Supplier/Printed Name</p>
        </div>
        <!--/.col5-->
      </div>
      <!--/.row-->
    </section>
    <!--/.invoice-->
    <!-- /.content -->
  </div>
  <!-- ./wrapper -->
</body>

</html>