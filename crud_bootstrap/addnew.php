<?php
	include('config.php');
	
	$firstname=$_POST['admno'];
	$lastname=$_POST['email'];
	
	
	mysqli_query($mysqli,"insert into user (firstname, lastname, address) values ('$firstname', '$lastname')");
	header('location:index.php');

?>