<?php
require_once("connection.php");
session_start();
$to=$_GET["to"];
$subject=$_GET["subject"];
$body=$_GET["body"];
$q="INSERT INTO message VALUES('','{$to}','{$subject}','{$body}')";
mysqli_query($conn,$q);
?>