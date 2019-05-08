<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Patrick+Hand" rel="stylesheet">


  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <nav class="navbar navbar-inverse">
    				<div class="container-fluid">
    					<div class="navbar-header">
    						<p><a class="navbar-brand" id="logo" href="#">Welcome to ....</a></p>
    						<p></span><a id="logi">Fish List</a></p>
    					</div>
    						<ul class="nav navbar-nav navbar-right">
    							<li><a href="#"><span class="glyphicon glyphicon-user"></span>Register</a></li>
    							<li><a href="#">Logout</a></li>
    							<li><a href="#"></span> Home</a></li>
    						</ul>
    				</div>
    			</nav>
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form method="POST" action="<?= base_url();?>index.php/login/" class="user form">
                    <div class="form-group">
                      <input name="email" type="text" class="form-control form-control-user" id="email" placeholder="Enter Your Username..." required>
                    </div>
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" id="password" placeholder="Password" required>
                    </div>
                    <button type="submit" name="submit_login" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url(); ?>index.php/register/daftar">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
