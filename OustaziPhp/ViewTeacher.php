<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
	session_start();
		
include 'bootstrap.php';

$id=$_GET["id"];//get the q parameter from URL
$con=mysqli_connect("localhost","root","","ostazi");
$r = mysqli_query($con, "select firstname,lastname,email,location from user where id like $id" ) ;
$r2 = mysqli_query($con, "select idcourse,price from canteach where idteacher like $id" );

?>
<div class="container">
		<img src="images/new.png"></div>
	<div class="container">
	<div class="row">
	
		
   <div class="col-sm-6">
    <div class="card">
      <div class="card-body">

    <h1><p class="font-weight-light"></p>Main Information</h1>
    <?php
echo " <ul >";
$row2 = mysqli_fetch_array($r2);
$idd=$row2['idcourse'];

$r3 = mysqli_query($con, "select name from course where idc like $idd" );
$row3 = mysqli_fetch_array($r3);
 while($row = mysqli_fetch_array($r) ) {
 	$name=$row3['name'];
 
 	echo "<tr>";
 	//echo "<li >".$row['name']."</li>";
 	echo "<h4><li>Name : </h4>".$row['firstname']." ".$row['lastname']."</li>";
 	//echo "<li>".$row['lastname']."</li>";
 	echo "<h4><li>Location : </h4>".$row['location']."</li>";
 	echo "<h4><li>Email : </h4>".$row['email']."</li>";
 	echo "<h4><li>CourseName : </h4>".$row3['name']."</li>";
 	echo "<h4><li>Price : </h4>".$row2['price']."$</li>";
//       echo "<td>	".$row['firstname']."</td> ";
//       echo "<td>".$row['lastname']."</td> ";
//       echo "<td>".$row['email']."</td> ";
//       echo "<td>".$row['location']."</td> ";
//       ;
//       echo "</tr>";
 
//  <ul class="list-group">
//   <li class="list-group-item">Cras justo odio</li>
//   <li class="list-group-item">Dapibus ac facilisis in</li>
//   <li class="list-group-item">Morbi leo risus</li>
//   <li class="list-group-item">Porta ac consectetur ac</li>
//   <li class="list-group-item">Vestibulum at eros</li>
// </ul>
//   	}
// echo"<TABLE>";
 }
 mysqli_close($con);
 
?>  <br>
 <form action="" method="post">
<input type="submit" value="Edit" class="btn btn-primary" name="Request">

<?php 
$_SESSION['request']=$_SESSION['username'];
 if (isset($_POST['Request'])){?>
<div class="alert alert-primary" role="alert">
  We have sent your registration request, you will receive a reply shortly through email, you're welcome 
</div></form>
<?php
    }else echo ".";

?>

<!-- 	
if (isset($_POST['Request'])) {
	$username=$_SESSION['username'];
	$con=mysqli_connect("localhost","root","","ostazi");
$r4 = mysqli_query($con, "select id,email from user where firstname like $username and roleid=1");
$row4 = mysqli_fetch_array($r4);
echo $row4['email'];
 mysqli_close($con);?> -->

</div></div></div></div>

</div></body>
</html>