<?php
$con=mysqli_connect("localhost","root","","project");
$x=$_GET['z'];
$sql="delete from admission where id=$x";
if(mysqli_query($con,$sql))
{
    echo "Record Deleted";
}
else
{
    echo "error".mysqli_error($con);
}
?>