<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
        <a class="navbar-brand brand-logo" href="index.html">
            <img src="../../images/gayatri.png" alt="logo" /><p style="font-size:20px;">Gayatri Infotech</p>
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="../../images/gayatri.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="img-xs rounded-circle" src="../../../template/pages/forms/pics/<?php echo $image;?>" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../../../template/pages/forms/pics/<?php echo $image;?>" alt="Profile image" width="30%">
                <p class="mb-1 mt-3 font-weight-semibold">
                <?php 
                    if(isset($_SESSION['username']) && $_SESSION['username']==true)
                    {
                        $user=true;
                    }
                    else
                    { 
                        $user=false;
                    }
                    if(!$user)
                    {
                    ?>
                        <small><i class="fa fa-envelope mr-2"></i>gayatriinfotech.in</small>
                        <?php
                    }
                    else
                    {
                      $con=mysqli_connect("localhost","root","","project");
                      $user=$_SESSION['username'];

                      $sql="select * from register where email='$user'";

                      $result=mysqli_query($con,$sql);
                      $count=mysqli_fetch_row($result);
                      $name=$count[1];
                      $image=$count[4];
                        ?>
                        <small><i class="fa fa-envelope mr-2"></i><?php echo $name;?></small>
                        <?php
                    }
                    ?>
                  </p>
                <p class="fw-light text-muted mb-0">
                
                  </p>
              </div>
              <a  href="editprofile.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Edit Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a href="login.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Log In </a>              
              <a href="logout.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->