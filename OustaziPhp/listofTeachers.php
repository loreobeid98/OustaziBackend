<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<body>

<?php
$mysqli = new mysqli("localhost", "root", "", "ostazi");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "select id,firstname,lastname from user
where location = ? AND roleid=1 ";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q2']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id,$firstname, $lastname);

?>
<TABLE border=1>
<TR>
	<TH>FirstName</TH><TH>LastName</TH><TH>Information</TH>

</TR>
<?php
while( $stmt->fetch() ) {
echo "<tr>";

 // echo "<td><a href='delete.php?id=".$id."'>Delete</a></td>";
echo "<td>" . $firstname. "</td>";
	echo "<td>" . $lastname . "</td>";
	    echo "<td><a href='ViewTeacher.php?id=".$id."'>View</a></td>";
	   
	    
echo "</tr>";
}
$stmt->close();

?>
</TABLE>
</body>
</html>