<?php
$serverName = "DESKTOP-20REMAB";
$username = "";
$password = "";
$dbName = "CRUD";

$connectionInfo = array( "Database"=>"$dbName", "UID"=>"$username", "PWD"=>"$password");
$conn = sqlsrv_connect( $serverName, $connectionInfo); 
?>