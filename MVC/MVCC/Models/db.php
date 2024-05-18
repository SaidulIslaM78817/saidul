<?php

function conn()
{
	$serverName="localhost";
	$userName="root";
	$pass="";
	$dbName="db";
	$con=new mysqli($serverName,$userName,$pass,$dbName);
	return $con;

	

}



?>