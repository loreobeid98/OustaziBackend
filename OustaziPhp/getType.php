<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
$id=$_GET['q'];
			$mysqli = new mysqli("localhost", "root", "", "ecommerce");
			if($mysqli->connect_error) {
			  exit('Could not connect');
			}
			if ($id==1) {
				$sql = "select Description,Price,Image from items i";
				# code...
			}
			else
			{
$sql = "select Description,Price,Image from items i
where i.TypeID = ?";}

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($Description, $Type,$Image);
$id=$_GET['q'];
?>
<TABLE border=1> 
<TR>
	<TH>Description</TH><TH>Price</TH><TH>Image</TH><TH>Action</TH>

</TR>
<?php
while( $stmt->fetch() ) {
echo "<tr>";

 // echo "<td><a href='delete.php?id=".$id."'>Delete</a></td>";
echo "<td>" . $Description. "</td>";
	echo "<td>" . $Type . "</td>";
	echo "<td><img src ='Images/$Image.JPG' width ='100px' height = '100px'/</td>";
	    // echo "<td><a href='addToCart.php?id=".$_GET['q']."'>addToCart</a></td>";
	    echo "<td><input type ='button' onclick= 'total($id)' value ='Add to Cart' \>   </td>";
	   
	    
echo "</tr>";
echo "<div id ='total'></div>";
}
$stmt->close();

?>

</TABLE>
<div id="txtHint">...</div>
<script>
function total(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "addToCart.php?q="+str, true);
  xhttp.send();
}
</script>
<a href ="comment.php"> Add Comments </a>  
</body>
</html>