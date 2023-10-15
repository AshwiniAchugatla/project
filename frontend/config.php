<?php
$con=mysqli_connect("localhost","root","","project");
if($con)
{
    echo "Database Connected";
}
else
{
    echo "Database Not Connected";
}
?>