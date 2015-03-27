<?php
	header('Content-type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');
	// Conectar bd
	$con=mysqli_connect("localhost","root","root","dscoop");

	
    mysqli_query($con, "SET character_set_results=utf8");
    mb_internal_encoding('UTF-8');
    mysqli_query($con, "set names 'utf8'");

	// Check connection 
	if (mysqli_connect_errno()){
	  echo "Error, no se pudo conectar la base de datos: " . mysqli_connect_error();
	} 
?>