<!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+217 2656377</small>
                    <small class="px-3">|</small>
                    <?php 
                    if(isset($_SESSION['email']) && $_SESSION['email']==true)
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
                        ?>
                        <small><i class="fa fa-envelope mr-2"></i><?php echo $_SESSION['email'];?></small>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand ml-lg-3">
            <div class="col-xl-2 col-lg-2">
                            <img src="img/gayatri.png" 
                            style="height:50px;margin-left:-50px;float:left;margin-top:15px;">
                            <p style="display: inline-block;float: left;font-weight: bold;color: rgb(228 103 19);
                             margin-bottom: 0;margin-left: 10px;font-size:35px;">
                             Gayatri 
                            <span style="display: block;font-size: 15px; font-weight: 500;
                             letter-spacing: 8.5px;text-transform: capitalize; text-align: right;
                             color: purple;border-top: 1px solid #ddd;">
                             Infotech</span></p>
                        </div>
               <!-- <h3 class="m-0 text-uppercase"><img src="img/gayatri.png" width=10%><font style='color:rgb(228 103 19);'>Gayatri Infotech</font></h3>-->
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="course.php" class="nav-item nav-link">Courses</a>
                    <a href="coursedetail.php" class="nav-item nav-link">Course Details</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="register.php" class="nav-item nav-link">Registration</a>
                    <!--<a href="login.php" class="nav-item nav-link">LogIn</a>-->
                </div>
                <div>
                    <?php 
                    if(isset($_SESSION['email']) && $_SESSION['email']==true)
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
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle btn py-2 px-4 d-none d-lg-block" data-toggle="dropdown" style="background-color:rgb(228 103 19); color:white;">LogIn</a>
                        <div class="dropdown-menu m-0">
                            <a href="login.php" class="dropdown-item">LogIn</a>
                        </div>
                    </div>
                    <?php
                            }
                        else
                        {
                    ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle btn py-2 px-4 d-none d-lg-block" data-toggle="dropdown" style="background-color:rgb(228 103 19); color:white;">LogOut</a>
                        <div class="dropdown-menu m-0">
                            <a href="logout.php" class="dropdown-item">Logout</a>
                            <a href="template/index.php" class="dropdown-item">User Dashboard</a>
                        </div>
                    </div>            
                    <?php
                        }
                    ?>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
