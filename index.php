<?PHP
include 'inc/db.php';     # $host  -  $user  -  $pass  -  $db
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tim">
    <title>Landing Page</title>

  <!-- Custom fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="c_p/css/cp-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/login.css">
</head>

<body id="page-top">
    <!-- Header -->
	<header class="header" style="background:#FFF;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="col-6 logo mt-3"><img src="images/thelogo.svg" class="thelogo" alt="" style="float:left; max-width: 340px;"/></div>
					</div>
				</div>
			</div>
		</div>
	</header>
    
    
  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Countries Row -->
          <div class="row">
            <div class="clearfix"></div>
            <div class="col-10 offset-1 mt-5">
						<div class="home_content text-center">
							<div class="login">
								<h1>Login</h1>
								<form action="authenticate.php" method="post">
									<label for="username">
										<i class="fa fa-user"></i>
									</label>
									<input type="text" name="username" placeholder="Username" id="username" required>
									<label for="password">
										<i class="fa fa-lock"></i>
									</label>
									<input type="password" name="password" placeholder="Password" id="password" required>
									<input type="submit" value="Login">
								</form>
							</div>
						</div>
					</div>
          </div>
            

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Silverless 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Custom scripts for all pages-->
  <script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="c_p/js/bootstrap.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="c_p/js/dashboard.js"></script>
  <script src="c_p/js/cp-admin.js"></script>
</body>

</html>
