<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
</head>
<body>

	<?php
	session_start();
	
include 'bootstrap.php';
?>
 <form action="" method="post">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <a class="navbar-brand" href="#"></a><img src="images/favicon.ico">
  <a class="navbar-brand" href="#">  OUSTAZI_Students</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="student.php">Home<span class="sr-only">(current)</span></a>
      </li>
   

         <li class="nav-item">

        <a class="nav-link" href="mainpage.php">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="profileS.php" class="btn btn-primary">
  <span class="badge badge-primary"><?php echo $_SESSION['username'];?></span></a>

    </form>
  </div>
</nav>    
<div class="row">
 <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
<div class="container">
  <img src="images/ouss.jpg">
  <h3><i>Find Your desired Teacher</i> </h3>                              

</div></div></div></div>
<!-- <?<?php  ?>

 $con= mysqli_connect("localhost", "root","", "ostazi");
$sql="select * from user 
      where location='berkayel akkar'& roleid='1'";
      $result=mysqli_query($con,$sql);//execute the query
$nbrows=mysqli_num_rows($result);//return the number of rows
// echo $nbrows;
	$row = mysqli_fetch_array($result);	
	$teacherfname= $row['firstname'];
		$teacherlname= $row['lastname'];		
	$location= $row['location'];
	mysqli_close($con);



  ?>

<div class="card-deck">
  <div class="card">
  
    <div class="card-body">
      <h5 class="card-title"><h1><?php echo "    $teacherfname"; echo " $teacherlname " ?></h1></h5>
      <p class="card-text"><p class="font-italic"> Located in <?php echo  " $location" ;?></p> </p>

<a href="teachprofile.php" class="btn btn-primary">Request</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small></br>
    </div>
 
  <?php

 $con= mysqli_connect("localhost", "root","", "ostazi");
$sql2="select * from user 
      where location='halbaa'& roleid='1'";
      $result2=mysqli_query($con,$sql2);//execute the query
$nbrows=mysqli_num_rows($result2);//return the number of rows
// echo $nbrows;
	$row = mysqli_fetch_array($result2);	
	$teacherfname2= $row['firstname'];
		$teacherlname2= $row['lastname'];		
	$location= $row['location'];
	 ?>
 -->
 
 <div class="container">
  
 <div class="col-6">
<select class="custom-select custom-select-lg mb-3" onchange="showHint(this.value)">
  <option selected >Where? </option>
  <option value="Berkayel">Berkayel</option>
  <option value="Tal Abbas">Tal Abbas</option>
  <option value="Miniara">Miniara</option>
  <option value="Halba">Halba</option>
</select>

 <script>
function showHint(str)
{
  if (str.length==0)  { 
    document.getElementById("txtHint2").innerHTML="";
    return;
  }
  xmlhttp=new XMLHttpRequest(); 
  xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200)   {
      document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","listofTeachers.php?q2="+str,true);
  xmlhttp.send();
}
</script>
</div>
<div class="row">
<div class="col-6">
  <h1><p class="font-weight-light">Teachers List</p></h1>
      
<div id="txtHint2"> </div></p></div>



 
</div></div></div></div>
</body>
</html>