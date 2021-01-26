<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CPU Purchasing | Log in</title>

  <!-- CCS -->
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

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/theme/bower_components/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/theme/bower_components/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/theme/bower_components/login/css/main.css">
	<!-- /. CCS-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>

	<!-- header -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?php echo base_url();?>/assets/theme/bower_components/login/images/bg-02.jpg); height: 30px;">
					<span class="login100-form-title-1">
						Sign-in
					</span>
				</div> <!--/. login100-form-->
				<!-- /. header -->

        <!-- username -->
        <?php echo form_open('login/validate');?>
        <p class = "text-center"><br><?php echo $this->session->flashdata('msg');?></p>
				<div class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div> <!-- /. wrap-input100-->
					<!-- /. username-->

					<!-- password-->
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div> <!-- /. wrap-input100-->
					<!-- /. password-->
						<button class="login100-form-btn">
							Login
						</button>
				 </div>
						<!-- /. button -->
					</div> <!-- /. container-login100-form-btn -->
			</div> <!-- /. wrap-login100 -->
		</div> <!-- /. container-login100-->
	</div> <!-- /. limiter-->

<!-- Javascript -->
<script src="<?php echo base_url();?>assets/theme/bower_components/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>assets/theme/bower_components/login/js/main.js"></script>
<!-- /. Javascript -->

</body>
</html>
