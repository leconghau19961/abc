<?php
	$lastnem = $_POST['lastName'];
	$firstnem = $_POST['firstName'];
	$gender = $_POST['gender'];
	
	$email = $_POST['email'];
	$address = $_POST['address'];
	$city = $_POST['city'];	
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$db = new PDO('mysql:host=localhost;dbname=customer','root','');
	$sql = "insert into customers(fname,lname,gender,address,email,city,state,zip) values('$firstnem','$lastnem','$gender','$address','$email','$city','$state','$zip')";
	$resulte = $db->exec($sql);
	if($db->exec($sql))
	{
		header('location:../customer.php');
	}
	else
	{
		header('location:../addcustomer.php');
	}
?>