<?php
$con=mysqli_connect("localhost","root","","project");
session_start();
$user=$_SESSION['email'];
if(isset($_POST['btn']))
{
  $filename=$_FILES['image']['name'];
  $filesize=$_FILES['image']['size'];
  $filetempname=$_FILES['image']['tmp_name'];
  $filetype=$_FILES['image']['type'];
  $filestore="../template/pages/forms/pics/".$filename;

    $name=$_POST['name'];
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conformpassword=$_POST['conformpassword'];
    $qualifiaction=$_POST['qualification'];
    $address=$_POST['address'];

  if(move_uploaded_file($filetempname,$filestore))
  {
$sql="update register set image='$filename',name='$name',mobileno=$mobileno,email='$email',password='$password',conformpassword='$conformpassword',qualification='$qualification',address='$address' where email='$user'";
    if(mysqli_query($con,$sql))
    {
        echo "Data Inserted";
    }
    else
    {
        echo "error".mysqli_error($con);
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
      <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
        height: 109.1vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>
   

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              
            <?php
                    $con=mysqli_connect("localhost","root","","project");
                    $user=$_SESSION['email'];
                    $sql1="select * from register where email='$user'";
                    $res=mysqli_query($con,$sql1);
                    $rw1=mysqli_fetch_row($res);
                    ?>
              <form class="bg-white rounded shadow-5-strong p-4" method="post" enctype="multipart/form-data">
              <h5 style="color:blue">My Profile</h5>

                <div class="form-outline mb-4">
                  <input type="file" id="form1Example4" class="form-control" name="image"/>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form1Example1" class="form-control" name="name" value="<?php echo $rw1[1];?>"/>
                  <label class="form-label" for="form1Example1">Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="number" id="form1Example2" class="form-control" name="mobileno" value="<?php echo $rw1[2];?>"/>
                  <label class="form-label" for="form1Example2">Mobile Number</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form1Example3" class="form-control" name="email" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" value="<?php echo $rw1[3];?>"/>
                  <label class="form-label" for="form1Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example5" class="form-control" name="password" value="<?php echo $rw1[5];?>" />
                  <label class="form-label" for="form1Example5">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form1Example6" class="form-control" name="conformpassword" value="<?php echo $rw1[6];?>" required/>
                  <label class="form-label" for="form1Example6">Conform Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input text="input" id="form1Example7" class="form-control" name="qualification" value="<?php echo $rw1[7];?>" >
                  
                  <label class="form-label" for="form1Example7">Qualification</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form1Example8" class="form-control" name="address" value="<?php echo $rw1[8];?>"/>
                  <label class="form-label" for="form1Example8">Address</label>
                </div>

                <!-- Submit button -->
                <button class="btn btn-primary btn-block" name="btn">Edit Profile</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>