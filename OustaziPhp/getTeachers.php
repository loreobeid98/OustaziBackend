<?php
$q=$_GET["q2"];//get the q parameter from URL
$con=mysqli_connect("localhost","root","","ostazi");
$r = mysqli_query($con, "select firstname,lastname from user where firstname like'$q%' AND roleid=1" ) ;
echo "<TABLE>";
 while($row = mysqli_fetch_array($r) ) {
 	echo "<tr>";
      echo "<td>".$row['firstname']."</td> ";
      echo "<td>".$row['lastname']."</td> ";
      echo "</tr>";
 }
  	
echo"<TABLE>";
 mysqli_close($con);
 
?>