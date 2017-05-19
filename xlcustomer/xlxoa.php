<?php
	$id = $_GET['id'];
	$db = new PDO('mysql:host=localhost;dbname=customer','root','');
	$sql = "delete from customers where id='$id'";
	$kq = $db->exec($sql);

		header('location:../customer.php');
	
?>