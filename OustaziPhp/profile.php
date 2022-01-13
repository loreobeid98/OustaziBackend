
<html>
<head>

<title>Your Home Page</title>
<form method="POST">
<?php
include 'bootstrap.php';
?>
<?php
session_start();
$_SESSION['username']=$_POST['username'];


$username=$_POST['username'];
$password=$_POST['password'];		
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);		
$con= mysqli_connect("localhost", "root","", "ostazi");
$sql="select * from user 
      where firstname='$username' AND password='$password'";
      $result=mysqli_query($con,$sql);//execute the query
$nbrows=mysqli_num_rows($result);//return the number of rows
// echo $nbrows;

if ($nbrows == 1) {
	$row = mysqli_fetch_array($result);
	$id=$row['id'];
	$email = $row['email'];			
	$location=$row['location'];
	if($row['roleid'] == 1){
		
		header('location:teacher.php');
		//echo "<H1>Hey There Tutor!</H1>";
			//echo "You're located in =$location <BR>";	
	}
	else

	if ($row['roleid'] == 2) {
	header('location:student.php');
	}

	else if($row['roleid'] == 10){
	header('location:admin.php');

}}
else
header('location:mainpage.php');
?><div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required"><?php
mysqli_close($con); 
?>


</form>
</body>
</html>