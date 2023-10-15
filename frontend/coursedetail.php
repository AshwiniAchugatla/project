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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
            <h1 class="text-white display-1">Course Details</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Course Details</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-uppercase pb-2" style='color:rgb(228 103 19);'>Course Detail</h6>
                        </div>
                            <!--<h1 class="display-4">Web design & development courses for beginners</h1>-->
                            <!-- <img class="img-fluid rounded w-100 mb-4" src="img/header.jpg" alt="Image">-->
   
                            <div class="container mt-5">
                                <div class="accordion" id="accordionExample">
                                    <?php
                                    $con=mysqli_connect("localhost","root","","project");
                                    $sql="select * from coursedetail";
                                    $res=mysqli_query($con,$sql);
                                    $i=0;
                                    while($rw=mysqli_fetch_array($res))
                                    {
                                        if($i==0)
                                        {
                                    ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <?php echo $rw[2];?>
                                        </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $rw[5];?>
                                        </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    else
                                    {
                                    ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading<?php echo $rw['id'];?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $rw['id'];?>" aria-expanded="false" aria-controls="collapse<?php echo $rw['id'];?>">
                                            <?php echo $rw[2];?>
                                        </button>
                                        </h2>
                                        <div id="collapse<?php echo $rw['id'];?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $rw['id'];?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $rw[5];?>
                                        </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                    </div>
                </div>
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <div class="mb-5">
                            <h2 class="mb-4">Recent Courses</h2>
                            <?php
                            $con=mysqli_connect("localhost","root","","project");
                            $sql = "select * from courseinfo";
                            $a = mysqli_query($con,$sql);
                            while($rw=mysqli_fetch_row($a))
                            {
                            ?>
                            <a class="d-flex align-items-center text-decoration-none mb-4" href="webdevelopment.php?id=<?php echo $rw[0];?>">
                                <img class="img-fluid rounded" src="template/pages/forms/pics/<?php echo $rw[2];?>" alt="" style="height:70px; width:100px;">
                                <div class="pl-2">
                                    <h6 style='color:rgb(228 103 19);'><?php echo $rw[1];?></h6>
                                    <div class="d-flex">
                                        <small class="text-body mr-2"><p>Duration:<?php echo $rw[5];?></p></small>
                                        <small class="text-body"><p>Fees:<?php echo $rw[6];?>/-</p></small>
                                    </div>
                                </div>
                            </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>