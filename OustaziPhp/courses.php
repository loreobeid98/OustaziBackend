<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>register</title>

    <?php
    session_start();
include 'bootstrap.php';
?>
    <style>
        body {
            background-color: 8FBC8F;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">OUSTAZI</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="teacher.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="Account.php">Profile</a>
      </li>
         
       <li class="nav-item">
        <a class="nav-link disabled" href="index2.php">Logout</a>
      </li>
    </ul>
<div class="container">
    <h1><p class="font-weight-light">Courses You Would Teach</p></h1>
    <div class="row">
        <div class="col-4">
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Course</label>
                    <select class="form-control" name="cname" id="exampleFormControlSelect2">
                        <option value="Math">Math</option>
                        <option value="Physics">Physics</option>
                         <option value="Biology">Biology</option>
                          <option value="Chemistry">Chemistry</option>
                          <option value="English">English</option>
                    </select>
                </div>
 

                 <div class="form-group">
                    <label for="firstname">Price</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>
               


                <input type="submit" value="Edit" class="btn btn-primary" name="Edit">

            </form>
        </div>
    </div>
</div>
<?php
$teachername=$_SESSION['username'];
if (isset($_POST['Edit'])) {

//if (isset($_POST['signup'])) {
    //check if the inputs are not empty
// if ($_POST["fname"] && $_POST["email"] && $_POST["lname"] && $_POST["location"] && $_POST['user']) {
        //checking if the password is matching
        // if ($_POST["pass1"] == $_POST["pass2"]){
        //     $fname = $_POST['fname'];
        //     $lname = $_POST['lname'];
        //     $email = $_POST['email'];
        //     $location = $_POST['location'];
         $price = $_POST['price'];
            $cname = $_POST['cname'];
            $conn = mysqli_connect("localhost", "root", "", "ostazi");
           // $sql = "insert into `canteach` (`idteacher`, `idcourse`, `price`) values ('$IDT','$IDC','$price')";
             $sql="select * from user where firstname='$teachername'" ;
             $result = mysqli_query($conn, $sql);
               $row = mysqli_fetch_array($result);
                $IDT = $row['id'];
               // $idteacher=$_SESSION['id']; 
                //echo "$IDT";
       $sql="select * from course where name='$cname'";
             $result = mysqli_query($conn, $sql);
               $row = mysqli_fetch_array($result);
                $IDC = $row['idc'];
                // $_SESSION['idcourse']=$_POST['idc'];
               // echo "$IDC";
               // echo("$price");
               $sql1 = "insert into `canteach`(`idteacher`, `idcourse`, `price`) values ('$IDT','$IDC','$price')";
               $result = mysqli_query($conn, $sql1);
                    if($result)  { //   echo $result;?>
          <div class="alert alert-primary" role="alert">
  You have registered <?php echo $cname ?> successfully,<a href="teacher.php" class="alert-link">back </a> to main
</div>

                <?php
       }else{echo "error";}}
          

             
                ?>
    

</body>
</html>