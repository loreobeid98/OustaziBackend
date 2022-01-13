<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<body>
<form action="" method="post">
<?php
$mysqli = new mysqli("localhost", "root", "", "ostazi");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "select firstname,lastname from user
where location = ? AND roleid=2 ";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($firstname, $lastname);

?>
<TABLE border=1>
<TR>
	<TH>FirstName</TH><TH>LastName</TH><TH>Delete</TH>

</TR>
<?php
while( $stmt->fetch() ) {
echo "<tr>";

 // echo "<td><a href='delete.php?id=".$id."'>Delete</a></td>";
echo "<td>" . $firstname. "</td>";
	echo "<td>" . $lastname . "</td>";
	    echo "<td><a href='DeleteStudent.php?firstname=".$firstname."'>Delete</a></td>";
	   
	    
echo "</tr>";
}
$stmt->close();

?>
</TABLE>
</form>
</body>
</html>