<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Dashboard</title>
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
      <!--HEADER-->
      <p class="text-center">Central Philippine University</p>
      <p class="text-center">5000 Jaro, Iloilo City</p>
      <br>
      <p class="text-center">Office of the Property Custodian</p>
      <br>
      <p class="text-center"><strong>Physical Count of Equipments</strong></p><br>
      <!--BODY-->
      <div class="container">
        <div class="row">
          <div class="col-lg-1 col-sm-4">
            Date:
          </div>
          <!--/.col-->
          <div class="col-lg-2 col-sm-4">
            <?php echo $date;?>
          </div>
          <!--/.col-->
        </div>
        <!--/. row-->

        <div class="row">
          <div class="col-lg-1 col-sm-4">
            Department:
          </div>
          <!--/.col-->
          <div class="col-lg-2 col-sm-4">
            <?php echo $department->deptName;?>
          </div>
          <!--/.col-->
        </div>
        <!--/. row-->
      </div>
      <!--/.container-->
      <br>

      <?php echo form_open('PropertyCust/print'); ?>
      <?php foreach ($areas as $area) : ?>
        <table class="table table-bordered">
          <br>
          <thead>
            <tr class="clickable" data-toggle="collapse" id="row1" data-target=".row1">
              <th colspan="7" class="text-center"><?php echo $area->areaName; ?></th>
            </tr>
          </thead>
          <thead>
            <tr class="collapse row1 collapse in">
              <th style="width: 40px">No.</th>
              <th style="width: 40px">Qty</th>
              <th style="width: 40px">Unit</th>
              <th style="width: 40px">Item</th>
              <th style="width: 70px">Brand/Description</th>
              <th style="width: 55px">Control No.</th>
              <th style="width: 40px">Remarks</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $counter = 1;
            foreach ($items as $item) :
              if ($item->dept_section == $area->areaID) {
                ?>
                <tr class="collapse row1 collapse in">
                  <td><?php echo $counter; ?></td>
                  <td><?php echo $item->quantity; ?></td>
                  <td><?php echo $item->unit; ?></td>
                  <td><?php echo $item->item_name; ?></td>
                  <td><?php echo $item->item_description; ?></td>
                  <td><?php echo $item->control_number; ?></td>
                  <td><?php echo $item->remarks; ?></td>
                </tr>
                <?php $counter++;
              }
            endforeach; ?>
          </tbody>
        </table>
      <?php endforeach; ?>
      </form>


    </section>
    <!--/.invoice-->
    <!-- /.content -->
  </div>
  <!-- ./wrapper -->
</body>

</html>