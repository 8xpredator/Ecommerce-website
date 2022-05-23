<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<?php

$experience=$_POST["experience"];
$comments=$_POST["comments"];
$name=$_POST["name"];
$email=$_POST["email"];


	$query="insert into feedback(experience,comments,name,email) values('$experience','$comments','$name','$email')";
	//echo $query;
	mysqli_query($con,$query);
		

		echo  "<script>alert('feedback send successfully');window.location='feeback.php'</script>";
	


?>