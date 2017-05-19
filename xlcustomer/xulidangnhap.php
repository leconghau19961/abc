<?php
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$db = new PDO('mysql:host=localhost;dbname=customer','root','');
	$sql = "select * from user where email='$email' and password='$pass'";
	$resulte = $db->query($sql);
	if($resulte->rowCount()>0)
	{
		header('location:../customer.php');
	}
	else
	{
		header('location:../login.php');
	}
?>