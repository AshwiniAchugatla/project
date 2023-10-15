<?php
$con=mysqli_connect("localhost","root","","project");
session_start();
if(isset($_POST['btn2']))
{
    $user=$_SESSION['email'];
    $coursename=$_POST['coursename'];
    $duration=$_POST['duration'];
    $fees=$_POST['fees'];
    $status=$_POST['status'];

    $name="select id from register where email='$user'";
    $res1=mysqli_query($con,$name);
    $ct=mysqli_fetch_row($res1);
    $id=$ct[0];

    if(!$id)
    {
        echo '<script>alert("Please Login...")</script>';
    }
    else
    {
    $a="select count(id) from studentdetails where  sid=$id and coursename='$coursename' ";
    $res=mysqli_query($con,$a);
    $count=mysqli_fetch_row($res);

    if($count[0]=='1') 
    {
        echo '<script>alert("This course is already added.Please choose another")</script>';
    }
    else
    {
        $a1="insert into studentdetails(sid,coursename,duration,fees,status)values($id,'$coursename','$duration',$fees,'$status')";
        if(mysqli_query($con,$a1))
        {
            echo '<script>alert("Your course is added")</script>';
        }
        else
        {
            echo "error".mysqli_error($con);
        }
    }
}
}
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
            <h1 class="text-white display-1">Courses</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Courses</p>
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
                        <h6 class="d-inline-block position-relative text-uppercase pb-2" style='color:rgb(228 103 19);'>Our Courses</h6>
                        <h1 class="display-4">Checkout New Releases Of Our Courses</h1>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <?php
                $con=mysqli_connect("localhost","root","","project");
                $sql = "select * from  coursedetail ";
                $a = mysqli_query($con,$sql);
                while($rw=mysqli_fetch_row($a))
                {
                ?>
                <div class="col-lg-4 col-md-6 pb-4">
                    <form method="post" >
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="html.php?id=<?php echo $rw[0];?>">
                        <img class="img-fluid" src="template/pages/forms/pics/<?php echo $rw[4];?>" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-Black px-3"><?php echo $rw[2];?></h4>
                            <input type="hidden" name="coursename" value="<?php echo $rw[2];?>">
                            <input type="hidden" name="duration" value="<?php echo $rw[7];?>">
                            <input type="hidden" name="fees" value="<?php echo $rw[8];?>">
                            <input type="hidden" name="status" value="inactive">
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                 
                                    <span class="text-Black"><a download="<?php echo $rw[6];?>" href="template/pages/forms/files/<?php echo $rw[6];?>"><button type="button" class="btn btn-fw" style="background-color:rgb(228 103 19); color:white">Download Syllabus</button></a></span>
                                    <span class="text-Black"><button class="btn btn-fw" style="background-color:rgb(228 103 19); color:white" name="btn2" >Add Course</button></span>
                                </div>
                            </div>
                        </div>
                    </a>
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