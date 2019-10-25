<?php   include_once ("config.php") ;
$id = $_GET["id"];

$sql = "UPDATE newcreation.tblemployee "; 
$sql .= "set status = 'inactive' " ;
$sql .= "where ID=:id" ;
$query = $dbconn->prepare($sql);
$query -> execute(array(':id' => $id));

ECHO "SUCESSFULLY DELETED" . "<br/>";

echo "<a  href = \"index.php\">Back</a>" ;
header("location: index.php")
?>