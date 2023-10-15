<?php
$con=mysqli_connect("localhost","root","","project");
$x=$_GET['z'];
$sql="delete from batch where id=$x";
if(mysqli_query($con,$sql))
{
    echo '<script>alert("Message Deleted")
    window.location.href="noticetable.php"
    </script>';
}
else
{
    echo "error".mysqli_error($con);
}
?>