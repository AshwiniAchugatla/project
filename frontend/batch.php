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
            <h1 class="text-white display-1">Batches</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Batches</p>
            </div>
           <!-- <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Courses</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Courses 1</a>
                            <a class="dropdown-item" href="#">Courses 2</a>
                            <a class="dropdown-item" href="#">Courses 3</a>
                        </div>
                    </div>
                    <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
    <!-- Header End -->


    <!-- login Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-uppercase pb-2" style='color:rgb(228 103 19);'>All Offline Batches</h6>
                        <h1 class="display-4">Offline Batches</h1>
                    </div>
                    <div class="table-responsive">
                    <?php
                        $con=mysqli_connect("localhost","root","","project");
                        $sql="select * from batch";
                        $a=mysqli_query($con,$sql);
                        ?>
                        <table rules="rows" class="table custom-table">
                        <thead>
                        <tr>
                          <th>
                            Course
                          </th>
                          <th>
                            Faculty
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Time
                          </th>
                          <th>
                            Duration
                          </th>
                          <th>
                            Fees
                          </th>
                          <th>
                            Location
                          </th>
                        </tr>
                        </thead>
                      <tbody>
                        <?php
                            while($rw=mysqli_fetch_row($a))
                            {
                        ?>
                        <tr>
                          <td>
                            <?php echo $rw[1];?>
                          </td>
                          <td>
                            <?php echo $rw[2];?>
                          </td>
                          <td>
                            <?php echo $rw[3];?>
                          </td>
                          <td>
                            <?php echo $rw[4];?>
                          </td>
                          <td>
                            <?php echo $rw[5];?>
                          </td>
                          <td>
                            <?php echo $rw[6];?>
                          </td>
                          <td>
                            <?php echo $rw[7];?>
                          </td>
                        </tr>
                        <?php
                            }
                            ?>
                      </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login End -->


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