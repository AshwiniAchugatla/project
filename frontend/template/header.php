<?php
session_start();

if(isset($_SESSION['admin']) && (isset($_SESSION['email'])))
{
  echo '<script> alert ("Please Login")
          window.location.href=../../index.php"
        </script>';
}
?>

<!-- partial:../../partials/_navbar.html -->
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.php">
            <img src="../../images/gayatri.png" alt="logo" /><p style="font-size:20px;">Gayatri Infotech</p>
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="../../images/gayatri.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <?php
                      $adminname="";
                      $adminname1="";
                      if(isset($_SESSION['admin']))
                      {
                      $con=mysqli_connect("localhost","root","","project");
                      $user=$_SESSION['admin'];

                      $nm="select * from adminregister where email='$user'";
                      $result=mysqli_query($con,$nm);
                      $count=mysqli_fetch_row($result);
                      $adminname=$count[1];
                ?>
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false" >
            <?php echo $adminname;?>
           </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a href="admineditprofile.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Edit Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a href="adminlogout.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Log Out</a>
              </div>
                <?php
                      }else if(isset($_SESSION['email']))
                      {
                        $con=mysqli_connect("localhost","root","","project");
                        $usermail=$_SESSION['email'];

                      $nm1="select * from register where email='$usermail'";
                      $result1=mysqli_query($con,$nm1);
                      $count1=mysqli_fetch_row($result1);
                      $adminname1=$count1[1];
                      }
                ?>
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <small><i class="fa fa-envelope mr-2"></i><?php echo $adminname1;?></small>
           </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a href="editprofile.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Edit Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a href="logout.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Log Out</a>
              </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <!-- partial -->