  <!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title></title>

</head>
<body>

	<?php
	session_start();
		
include 'bootstrap.php';
?>


  <form action="" method="post">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" > <h3>Oustazi Teachers</h3></a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="teacher.php">Home <span class="sr-only">(current)</span></a>
      </li>
   
   
         
       <li  class="nav-item">
        <a class="nav-link disabled" href="mainpage.php">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="profileS.php" class="btn btn-primary">
  <span class="badge badge-primary"><?php echo $_SESSION['username'];?></span></a>

    </form>
  </div>
</nav>

<div class="row">
<div class="container">
  <img src="images/ouss.jpg">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Select the courses</h5>
        <p class="card-text">These courses will appear to the student</p>
      <a href="courses.php" class="btn btn-primary">Edit Cousres</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">View Requests</h5>
        <p class="card-text">View latest Requests </p>
        <a href="viewRequests.php" class="btn btn-primary">View</a>
      </div>
    </div>
  </div>
</div>
</div>
</form>
</body>
</html>