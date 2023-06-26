<?php
require 'config.php';

$Name1 = $_POST["Fname"];
$Name2 = $_POST["Lname"];
$msg = $_POST["Message"];
$mb = $_POST["Mobile"];
$eml = $_POST["Email"];

$sql = "INSERT INTO information(First_Name,Last_Name,Mobile,Email,Messages) VALUES('$Name1','$Name2','$mb','$eml','$msg')";
if($conn->query($sql)){
	echo "<script>alert('Records added successfully!!!')</script>";
}
else{
	echo "<script>alert('ERROR:Could not able to execute the query. ')</script>";
	echo $sql;
}
?>