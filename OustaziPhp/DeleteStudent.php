<?php
$name=$_GET["firstname"];//get the q parameter from URL
$con=mysqli_connect("localhost","root","","ostazi");
$r = mysqli_query($con, "Delete from user where username=$name" )


 ?>