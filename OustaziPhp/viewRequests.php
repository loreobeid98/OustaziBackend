<!DOCTYPE html>
<html>
<head>

   </head> 
   <body>
  <?php
    session_start();
    include 'bootstrap.php';
    $username=$_SESSION['username'];
 
  $con=mysqli_connect("localhost","root","","ostazi");    
$r = mysqli_query($con,"select id from user where firstname='$username'" ) ;
$row = mysqli_fetch_array($r);
$id= $row['id'];
  $r = mysqli_query($con,"select RequesterID from request where idT=$id");
  $row = mysqli_fetch_array($r);
$reqID= $row['RequesterID'];
  $r = mysqli_query($con,"select firstname,lastname,location,email from user where id=$reqID");
   while($row = mysqli_fetch_array($r) ) {
  $name=$row['firstname'];
  ?><div class="container"><?php
  echo "<h1> Request </h1>"; 
 echo " <ul >";
  echo "<tr>";
  //echo "<li >".$row['name']."</li>";
  echo "<h4><li>Name : </h4>".$row['firstname']." ".$row['lastname']."</li>";
  //echo "<li>".$row['lastname']."</li>";
  echo "<h4><li>Location : </h4>".$row['location']."</li>";
  echo "<h4><li>Email : </h4>".$row['email']."</li>";
  echo "</ul>";}?>
</div>
  </body>
  </html>