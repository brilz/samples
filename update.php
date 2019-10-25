<?php   include_once ("config.php") ;
if(isset($_POST["update"])) {
$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$gender = $_POST["gender"];
$birthday = $_POST["birthday"];
$department = $_POST["department"];
$rank = $_POST["rank"];
if(empty($firstname) || empty($lastname) || empty($gender) || empty($birthday) || empty($department) || empty($rank)) {
    if(empty($firstname)) { echo " Input First Name  " . "</br>" ;  } 
    if(empty($lastname)) {echo "Input Last Name  " . "</br>"  ;  } 
    if(empty($gender)) { echo " Input Gender" . "</br>" ; } 
    if(empty($birthday)) { echo "Input Birthday " . "</br>"  ; }
    if(empty($department)) { echo "Input Dept  " . "</br>" ; } 
    if(empty($rank)) { echo "Input Rank " . "</br>" ; } 
    echo "<a href = \"edit.php\">BACK</a> ";
}
else {
$sql = "UPDATE newcreation.tblemployee "; 
$sql .= "set Efname = :fname, Elname = :lname, Egender = :gender, Ebirthdate = :bday, Edept = :dept, rank = :rank ";
$sql .= "where ID=:id";
$query = $dbconn->prepare($sql);
$query -> bindparam(':id', $id);
$query -> bindparam(':fname', $firstname);
$query -> bindparam(':lname', $lastname);
$query -> bindparam(':gender',$gender);
$query -> bindparam(':bday', $birthday);
$query -> bindparam(':dept', $department);
$query -> bindparam(':rank', $rank);
$query -> execute();

echo "Successfully UPDATED ,  YahoooO!!!" . "<br/>";
echo "<a    href = \"index.php\">Back</a>" ;
}
}
else {
echo "ERROR : restricted Access !";
}
?>