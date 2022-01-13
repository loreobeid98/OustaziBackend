<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$q=$_GET["id"];//get the q parameter from URL
$con=mysqli_connect("localhost","root","","liumail");
$r = mysqli_query($con, "select Username,EmailAddress from users where Id like'$q%'" ) ;
$row = mysqli_fetch_array($r);
	$Username= $row['Username']; 
	$EmailAddress=$row['EmailAddress']; 
	$r1 = mysqli_query($con, "select * from message where FromId like'$q%'" ) ;
     $row2 = mysqli_fetch_array($r1);
$Subject= $row2['Subject'];
$Body=$row2['Body'];
$Image=$row2['Attachment'];
 echo "<h1>".$Subject."</h1> ";
 echo $Username; echo "   "; echo $EmailAddress;
 echo "<p>".$Body."</p>";
 echo "<img src ='Uploads/$Image.JPG' width ='100px' height = '100px'/";
?>
</body>
</html>