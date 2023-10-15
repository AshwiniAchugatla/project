<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edukate - Online Education Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    
    <!-- Topbar End -->
<?php
    include("header.php");
?>
    <!-- Navbar Start -->
    
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Internship</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Internship</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center position-relative mb-5">
                        <h6 class="d-inline-block position-relative text-uppercase pb-2" style='color:rgb(228 103 19);'>Internship</h6>
                        <h1 class="display-4">Checkout New Releases Of Our Internship Courses</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $con=mysqli_connect("localhost","root","","project");
                $sql = "select * from  courseinfo";
                $a = mysqli_query($con,$sql);
                while($rw=mysqli_fetch_row($a))
                {
                ?>
                <div class="col-lg-4 col-md-6 pb-4">
                    <form method="post" >
                    <div class="card border border-light shadow-0 mb-3" style="width: 18rem; height: 380px;">
                        <img src="../pics/<?php echo $rw[2];?>" class="card-img-top" alt="Chicago Skyscrapers" height="150px"/>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $rw[1];?></h5>
                        </div>
                        <ul class="list-group list-group-light list-group-small">
                            <li class="list-group-item px-4"><?php echo $rw[5];?></li>
                            <li class="list-group-item px-4"><?php echo $rw[6];?></li>
                        </ul>
                        <div class="card-body">
                            <a href="enroll.php" class="btn" style="background-color:rgb(228 103 19); color:white">Enroll Now!</a>
                        </div>
                    </div>
                    </form>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Footer Start -->
    <?php
        include("footer.php");
    ?>
    <!-- Footer End -->
    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>