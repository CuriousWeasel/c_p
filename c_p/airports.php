<?PHP
include '../inc/db.php';     # $host  -  $user  -  $pass  -  $db
$airports = getFields('tbl_airports','id','1','>');     #   $tbl,$srch,$param,$condition
$regions = getFields('tbl_regions','id','1','>');     #   $tbl,$srch,$param,$condition
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tim">
    <title>Dashboard</title>

  <!-- Custom fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/cp-admin.css" rel="stylesheet">
    
    
  <script type="text/javascript" src="js/plupload/plupload.full.min.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="images/cheli.png" alt="Cheli & Peacock Safaris Logo" style="width:90%;"/>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="locations.php">
              <span>Locations</span>
            </a>
          </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <span>Properties</span>
      </div>

      <ul class="nav2 collapse show">
                 <li class="nav-item">
                    <a class="nav-link" href="#">Rooms</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Facilities</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Activities</a>
                  </li>
                <li class="nav-item active">
                    <a class="nav-link" href="airports.php">Airports</a>
                  </li>
            </ul>
      
      <!-- Divider -->
      <hr class="sidebar-divider">
        
      <div class="sidebar-heading">
        <span>Specials</span>
      </div>

      <!-- Divider -->
      <hr class="sidebar-divider">
        
      <div class="sidebar-heading">
        <span>Intineraries</span>
      </div>

        
       <!-- Divider -->
      <hr class="sidebar-divider">
        
      <!-- Heading -->
      <div class="sidebar-heading">
        <span>Flights</span>
      </div>

              <ul class="nav2 collapse show">
                 <li class="nav-item">
                    <a class="nav-link" href="#">Flight Maps</a>
                  </li>
              </ul>
              
       <div class="sidebar-heading">
        <span>Assets</span>
      </div>

              <ul class="nav2 collapse show">
                 <li class="nav-item">
                    <a class="nav-link" href="#">Images</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Maps</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Documents</a>
                  </li>
            </ul>

        
        
     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         <div class="col-md-3 small"><p class="m-top"><b>User Name : </b><?=$_SESSION['username'];?></p></div>
        <div class="col-md-3 small"><p class="m-top"><b>Organisation : </b><?=$_SESSION['company_name'];?></p></div>
        <div class="col-md-3 small"><p class="m-top"><b>Previous Log In : </b><?=$_SESSION['last_logged_in'];?></p></div>
        <div class="col-md-3 text-right"> <a href="#" class="d-none d-sm-inline-block btn btn-sm shadow-sm">Edit Profile</a> <a class="d-none d-sm-inline-block btn btn-sm shadow-sm" href="#" data-toggle="modal" data-target="#logoutModal">Log Out</a></div>
            
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="col-md-9">
              <!-- Page Heading -->
              <h1 class="h3 mb-2 text-gray-800"><strong>Airports</strong><span style="ml-2 small"> <a href="locations.php" class="d-none d-sm-inline-block btn btn-sm shadow-sm">&laquo; Back</a></span></h1>


              <!-- Regions -->
                <div class="clearfix"></div>
                    <p class="mt-3"><strong>Create New Airport</strong></p>
                    <form action="addairport.php" method="post" id="addairport" name="addairport">
                        <table class="table mb-5" id="addAirport" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Region</th>
                                  <th>Lat</th>
                                  <th>Long</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                  <td><input name="airport_name" type="text" id="airport_name"></td>
                                  <td><select name="region_id" id="region_id">
                                      <option value="0" selected="selected">Select</option>
                                        <?php $regionSelect = ''; 
                                            for($c=0;$c<count($regions);$c++){
                                               $regionSelect .= '<option value="'.$regions[$c]['id'].'">'.$regions[$c]['region_name'].'</option>' ;
                                            }
                                            echo ($regionSelect);
                                        ?>
                                    </select></td>
                                  <td><input name="lat" type="text" id="lat"></td>
                                  <td><input name="long" type="text" id="long"></td>
                                  <td><input type="submit" value="Add Airport" class="d-sm-inline-block btn btn-sm shadow-sm"></td>
                                </tr>
                              </tbody>
                        </table>
                    </form>
                
                         <table class="table mt-5" id="listAirports" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Region</th>
                                  <th>Lat</th>
                                  <th>Long</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                  
                                  <?php for($s=0;$s<count($airports);$s++){ #getField($tbl,$fld,$srch,$param)?>
                                       <tr><td><?=$airports[$s]['airport_name'];?></td>
                                           <td><?=getField('tbl_regions','region_name','id',$airports[$s]['region_id']);?></td>
                                           <td><?=$airports[$s]['lat'];?></td>
                                           <td><?=$airports[$s]['long'];?></td>
                                           <td><a href="delairport.php?id=<?=$airports[$s]['id'];?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm">Delete</a></td>
                                       </tr>
                                  <?php }?>
                              </tbody>
                            </table>
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Custom scripts for all pages-->
  <script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="js/dashboard.js"></script>
<script src="js/cp-admin.js"></script>

</body>

</html>
