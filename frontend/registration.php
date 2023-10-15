<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email'];
    $coursename=$_POST['coursename'];
    $city=$_POST['city'];

    $tb1="insert into onlinebatchstud(name,mobileno,email,coursename,city)values('$name',$mobileno,'$email','$coursename','$city')";
    if(mysqli_query($con,$tb1))
    {
        echo "Data Inserted";
    }
    else
    {
        echo "error".mysqli_error($con);
    }

	$to=$_POST['email'];
	$subject="Online Course Registration";
	$from="Ashwini Achugatla";
    $body=$name;
	$msg="Hi $name,


    Welcome to Gayatri infotech!!!
    You have registerd an online course for $coursename.
    

Regards,

Gayatri Infotech

Mb no: +217 2656377

Email: gayatriinfotech.in";

	$header="From:$from";

$sql="select count(id) from register where email='$email'";
$res=mysqli_query($con,$sql);
$count=mysqli_fetch_row($res);
//$name=$user[1];
//if($email=$count[3] && $password=$count[5])

if($count[0]=='1'|| $email=$count[3])
{
   mail($to,$subject,$msg,$header);
    echo"<script>alert('Your Registration Is Done. Please Check Your Mail!')</script>";

	session_start();
	$_SESSION['email']=$email;
   //header('location:index.php');
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

    <!-- login Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-uppercase pb-2" style='color:rgb(228 103 19);'>Registration For Online Course</h6>
                        <h1 class="display-4">Register</h1>
                    </div>
                    <div class="contact-form">
                        <form method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Full Name" required="required" name="name" pattern="[a-z A-Z]+">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Mobile Number" required="required" name="mobileno" pattern="[0-9]+">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Mail Id" required="required" name="email" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Course Name" required="required" name="coursename" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="State/City" required="required" name="city" required>
                                </div>
                                <div>
                                    <button class="btn py-3 px-5" type="submit" name="btn" style="background-color:rgb(228 103 19); color:white">Register</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


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