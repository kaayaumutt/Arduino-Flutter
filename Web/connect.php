<?php
	$mysqli = new mysqli("localhost","root","","controldb");
	//$mysqli = new mysqli("192.168.56.106","root","maxmi33","controldb",3306);

	if ($mysqli -> connect_errno) {
		echo "MySQL bağlantısı hatalı: " . $mysqli -> connect_error;
		exit();
	}
	else{
		echo "MySQL bağlantısı başarılı";
	}
?>