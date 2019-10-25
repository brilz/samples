<?php
$host = 'localhost'; 
$database = 'newcreation';
$Username = 'root';
$Password = '';

try{ 
    //$dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);
$dbconn = new PDO("mysql:host = {$host}; dbname = {$database}", $Username, $Password) ;
$dbconn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Success  !" ;
}
catch(PDOException $e) {
	echo $e->getMessage();
}
?>




