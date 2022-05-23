<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<?php

$complaint=$_POST["complaint"];
$comments=$_POST["comments"];
$name=$_POST["name"];
$email=$_POST["email"];


	$query="insert into complaint(complaint,comments,name,email) values('$complaint','$comments','$name','$email')";
	//echo $query;
	mysqli_query($con,$query);
		

		echo  "<script>alert('Complaint send successfully');window.location='complaint.php'</script>";
	


?>