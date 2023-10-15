<?php
$con=mysqli_connect("localhost","root","","project");
$x=$_GET['z'];
$sql="delete from courseinfo where id=$x";
if(mysqli_query($con,$sql))
{
    echo '<script>alert("Record Deleted")
    window.location.href="courseinfotable.php"
    </script>';
}
else
{
    echo "error".mysqli_error($con);
}
?>