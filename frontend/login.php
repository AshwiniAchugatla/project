<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btn']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

	$to=$_POST['email'];
	$subject="Login successfully";
	$from="Ashwini Achugatla";
    $body=$name;
	$msg="Hi $name,


    Welcome to Gayatri infotech!!!
    
    
Regards,

Gayatri Infotech

Mb no: +217 2656377

Email: gayatriinfotech.in";

	$header="From:$from";

$sql="select count(id) from register where email='$email' and password='$password'";
$res=mysqli_query($con,$sql);
$count=mysqli_fetch_row($res);
//$name=$user[1];
//if($email=$count[3] && $password=$count[5])

if($count[0]=='1'|| $email=$count[3] && $password=$count[5])
{
   mail($to,$subject,$msg,$header);
    echo"welcome to user";

	session_start();
	$_SESSION['email']=$email;
   header('location:course.php');
}
else
{
    echo "<script>alert('User not registred')</script>";
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
            <h1 class="text-white display-1">LogIn</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Login</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- login Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-uppercase pb-2" style='color:rgb(228 103 19);'>Log In Form</h6>
                        <h1 class="display-4">LogIn</h1>
                    </div>
                    <div class="contact-form">
                        <form method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Mail Id" required="required" name="email" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Enter Password" required="required" name="password" required>
                                </div>
                                <div class="form-group">
                                <p class="text-center">Forgot your password click here to <a href="forgotpassword.php">Reset Password</a></p>
                                </div>
                                <div>
                                    <button class="btn py-3 px-5" style="background-color:rgb(228 103 19); color:white" type="submit" name="btn">Log In</button>
                                </div>
                        </form>
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