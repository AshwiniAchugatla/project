<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btn']))
{
    $rid=$_POST['email'];
    $fullname=$_POST['fullname'];
    $mobileno=$_POST['mobileno'];
    $address=$_POST['address'];
    $subject=$_POST['subject'];
    $radio=$_POST['radio'];

$tb1="insert into admission(rid,fullname,mobileno,address,subjects,gender)values($rid,'$fullname',$mobileno,'$address','$subject','$radio')";
    if(mysqli_query($con,$tb1))
    {
        echo "Data Inserted";
    }
    else
    {
        echo "error".mysqli_error($con);
    }
}
if($con)
{
    echo "Database connected";
}
else
{
    echo "Database not connected";
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
            <h1 class="text-white display-1">Admission</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Admission</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Admission Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Admission Form</h6>
                        <h1 class="display-4">Admission Details</h1>
                    </div>
                    <div class="contact-form">
                        <form method="post">
                                <div class=" form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Full Name" required="required" name="fullname" pattern="[a-zA-Z]+">
                                </div>
                                <div class=" form-group">
                                    <input type="number" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Mobile Number" required="required" name="mobileno" pattern="[0-9]+">
                                </div>
                                <div>
                                <select class="form-control border-top-0 border-right-0 border-left-0 p-0" name="email" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$">
                                    <option>Select Email Id</option>
                                        <?php
                                            $sql="select * from register";
                                            $res=mysqli_query($con,$sql);
                                            while($rw=mysqli_fetch_row($res))
                                            {
                                        ?>
                                    <option value="<?php echo $rw[0];?>"><?php echo $_SESSION['email'];?></option>
                                        <?php
                                            }
                                        ?>
                                </select>
                                </div>
                                <div class=" form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Address" required="required" name="address" requied>
                                </div>
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <input type="radio" required="required" name="radio" value="Male">MALE
                                    </div>
                                    <div class="col-6 form-group">
                                        <input type="radio" required="required" name="radio" value="Female">FEMALE
                                    </div>
                                </div>
                                <div>
                                    <select class="form-control border-top-0 border-right-0 border-left-0 p-0" name="subject">
                                        <option>Select Subjects</option>
                                        <?php
                                            $sql1="select * from coursedetail";
                                            $res=mysqli_query($con,$sql1);
                                            while($rw=mysqli_fetch_array($res))
                                            {
                                        ?>
                                        <option value="<?php echo $rw[2];?>"><?php echo $rw[2];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-light py-3 px-5" type="submit" name="btn">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Admission End -->


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