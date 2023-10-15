<?php
$con=mysqli_connect("localhost","root","","project");
session_start();
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conformpassword=$_POST['conformpassword'];
    $qualification=$_POST['qualification'];
    $address=$_POST['address'];
    
    $filename=$_FILES['image']['name'];
    $filesize=$_FILES['image']['size'];
    $filetempname=$_FILES['image']['tmp_name'];
    $filetype=$_FILES['image']['type'];
    $filestore="pics/".$filename;

    $to=$_POST['email'];
	$subject="Registration successfully Done";
	$from="Ashwini Achugatla";
    $body=$name;
	$msg="Hi $name,


    You have done with Registration.
    Welcome to Gayatri infotech!!!
    Please Do LogIn...
    
    
Regards,

Gayatri Infotech

Mb no: +217 2656377

Email: gayatriinfotech.in";

	$header="From:$from";

    if(move_uploaded_file($filetempname,$filename))
        {
                    if(filter_var($email,FILTER_VALIDATE_EMAIL))
                    {
                        $sql="select * from register where email='$email'";
                        $result=mysqli_query($con,$sql);
                        $num=mysqli_num_rows($result);
                            if($num>=1)
                                {
                                    echo '<script>alert("You Have Already Registered")</script>';
                                }
                            else
                            {
                                if($password==$conformpassword)
                                    {           
                                        $tb1="insert into register(name,mobileno,email,password,conformpassword,qualification,address,image)values('$name',$mobileno,'$email','$password','$conformpassword','$qualification','$address','$filename')";
                                        $add=mysqli_query($con,$tb1);
                                        if($con)
                                            {
                                                echo "<script>alert('Data Inserted')</script>";
                                            }
                                            else
                                            {
                                                echo "<script>alert('Data not Inserted')</script>";
                                            }
                                    }
                                    else
                                    {
                                        echo "Password not Match";
                                    }
                                        if($add)
                                            {
                                                mail($to,$subject,$msg,$header);
                                                echo "<script>alert('Your Registration has been done Succesfully!')</script>";
                                                header('location:login.php');
                                            }
                                        else
                                            {
                                                echo "fail try again";
                                            }
                            }
                    }
                    else
                    {
                        echo "Invalid email";
                    }
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
            <h1 class="text-white display-1">Registration</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Registration</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-uppercase pb-2" style='color:rgb(228 103 19);'>Register</h6>
                        <h1 class="display-4">Registertation Form</h1>
                    </div>
                    <div class="contact-form">
                        <form method="post" enctype="multipart/form-data">
                                <div class=" form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Name" required="required" name="name" pattern="[a-z A-Z]+">
                                </div>
                                <div class=" form-group">
                                    <input type="number" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Mobile Number" required="required" name="mobileno" pattern="[0-9]+">
                                </div>
                                <div class=" form-group">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Email" required="required" name="email" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$">
                                </div>
                                <div class="form-group">
                                <input type="password" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Password" required="required" name="password" required>
                                    </div>
                                <div class="form-group">
                                    <input type="password" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="ConformPassword" required="required" name="conformpassword" required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control border-top-0 border-right-0 border-left-0 p-0" required="required" name="qualification" required>
                                        <option>Select Qualification</option>
                                        <option>Diploma</option>
                                        <option>BSC</option>
                                        <option>BCS</option>
                                        <option>BCA</option>
                                        <option>MSC</option>
                                        <option>MCA</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class=" form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Current Address" required="required" name="address" required>
                                </div>
                                <div class=" form-group">
                                    <input type="file" class="form-control border-top-0 border-right-0 border-left-0 p-0" required="required" name="image">
                                </div>
                            <div>
                                <button class="btn py-3 px-5" style="background-color:rgb(228 103 19); color:white" type="submit" name="btn">Create Account</button>
                                <button class="btn btn-light py-3 px-5" type="submit" name="btn"><a href="login.php">LogIn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


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