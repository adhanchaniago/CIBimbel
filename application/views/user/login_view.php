
<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-90 p-b-30">
				<form class="login100-form validate-form" action="<?php echo base_url('user/login') ?>" method="post">
					<span class="login100-form-title p-b-40">
						Login Sistem Informasi Bimbel Neuron Yogyakarta
          </span>
          <?php 
          	if($this->session->flashdata('sukses')) {
              echo '<p class="text-warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
            }
            echo validation_errors('<p class="text-warning" style="margin: 10px 20px;">','</p>');
          ?>          
          
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					
					<div class="flex-col-c p-t-224">
						<span class="txt2 p-b-10">
							Atau Login Untuk Admin 
						</span>

						<a href="#" class="txt3 bo1 hov1">
							Di sini!
						</a>
					</div>
					
				</form>
      </div>

    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline-block ">
          Login Template By  <a href="https://colorlib.com/wp/template/login-form-v7/"> colorlib.com</a>
        </div>
      </footer>

	</div>
	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/js/main.js"></script>

</body>
</html>
