<?php
	include('connect.php');
	$data= $_GET['data'];
	$sql = "INSERT INTO `datatest`(`data`) VALUES ($data)";
	$mysqli->query($sql);
	$mysqli->close();
?>