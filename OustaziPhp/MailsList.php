<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	welcome
<?php

	session_start();
 echo $_SESSION['username'];

 ?>
<A Href="login.php"> Logout</A>


 <H1 > My Inbox  </H1>
<TABLE >
	<thread> 



<?php
 $name=$_SESSION['username'];
 $con=mysqli_connect("localhost","root","","liumail");
 $sql="select * from users where Username='$name'" ;
             $result = mysqli_query($con, $sql);
               $row = mysqli_fetch_array($result);
                $IDU = $row['Id'];
               // echo $IDU;
$con=mysqli_connect("localhost","root","","liumail");
$query = "SELECT * FROM message where ToId =$IDU";
$result = mysqli_query($con,$query);//storing the result of $query into $result
// P.S. I could not link both tables on mysql since it's an old version where i werent able to know how 
//that's why I left it fromID 
while(  $row = mysqli_fetch_array($result)  ) {
	echo "<tr >";
	echo "<td> From: " . $row['FromId'] . " </td>";
	echo "<td> Subject : " . $row['Subject'] . "</td>";
	 echo "<td><a href='MessageDetails.php?id=".$row['FromId']."'>Read</a></td>";
	echo "</tr>";
}
mysqli_close($con);
?>  
</thread>
</table>

</TABLE>
</div>
<div >
	<h1>Compose </h1><br>
	To :

<?php


$con=mysqli_connect("localhost","root","","liumail");
 $sql="select * from users " ;
$result = mysqli_query($con,$sql);
  
echo "<select name=\"Type\" >";

while ($ary = mysqli_fetch_array($result)){

	echo "<option value=\"" . $ary['Id']  . "\">" . $ary ['Username']  . "</option>";
}

echo "</select>";


?>
<br>
<input type="text" name="subject" placeholder="Subject" id=subject >
<br>
<TEXTAREA name="body" > </TEXTAREA>
</div>
<form action="up.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<br>
<input type="button" onclick='add_comment()' value="Add Comment">
	</div>
<script type="text/javascript">
	
	function add_comment(){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
      		document.getElementById("comments").innerHTML=this.responseText;
			name.innerHTML.value='';
			comment.innerHTML.value='';
    	}};
    	var to=document.getElementById("to");
    	var subject=document.getElementById("subject");
    	var body=document.getElementById("body");
		xhttp.open("GET", "add_comment.php?to="+to.value+"&subject="+comment.value+"&body="+body.value, true);
		xhttp.send();
	}

</script>
</body>
</html>