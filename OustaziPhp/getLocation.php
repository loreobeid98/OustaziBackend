<?php
include('Connection.php');
$sql = "select * from Location";
$result = mysqli_query($con,$sql) or
die ("Record not found");
 while($row = mysqli_fetch_array($result)) {
   //$names[] = $row['Name'];
echo $row['Name'];
echo $row['Longitude'];
echo $row['Latitude'];
}


mysqli_close($con);
?> 	