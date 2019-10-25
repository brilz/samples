<?php   include_once ("config.php") ;
if(!isset($_GET['id'])){
    header("location: index.php");
}
$eid = $_GET["id"];
$efname = $_GET["fname"] ;
echo "Editing Employee ID: " . $eid . "</br> </br>";
echo "First Name:  " . $efname . "</br> </br>" ;

$sql = "SELECT * FROM newcreation.tblemployee where ID =:id";
$query = $dbconn->prepare($sql);
$query ->execute(array(':id'=> $eid));
while($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $FirstName = $row['Efname'];
    $LastName = $row['Elname'];
    $Gender = $row['Egender'];
    $Bday = $row['Ebirthdate'];
    $Dept = $row['Edept'];
    $Rank = $row['rank'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action = "update.php" method = "pOST">
    <label for = ""> First Name </label> <br>
    <input type= "text" name="firstname" value = "<?php echo $FirstName ?>"> <br/> <br/>
    <label for = ""> Last Name </label> <br>
    <input type= "text" name="lastname" value = "<?php echo $LastName ?>"> <br/> <br/>
    <label for = ""> Gender </label> <br>
    <input type= "text" name="gender" value = "<?php echo $Gender ?>">  <br/> <br/>
    <label for = ""> Birth day </label> <br>
    <input type= "date" name="birthday" value = "<?php echo $Bday ?>"> <br/> <br/>
    <label for = ""> Department </label> <br>
    <input type= "text" name="department" value = "<?php echo $Dept ?>">  <br/> <br/>
    <label for = ""> Rank </label> <br>
    <input type= "text" name="rank" value = "<?php echo $Rank ?>">  <br/> <br/>
    <input type= "hidden" name="id"  value = "<?php echo $eid ?>">  <br/> <br/>
    <input type= "submit"  name = "update" value = "UPDATE"/>  <br/>
    </form>
</body>
</html>