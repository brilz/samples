<?php  include_once ("config.php") ;

session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
$result = $dbconn->query("SELECT * FROM newcreation.tblusers  ");
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1> Welcome to PHIL SITE </h1> 
<h3> Halluuuu !!! <?php  echo $_SESSION['nick'] ?> </h3>
<a href="logout.php">LOG OUT</a></td>
<br/> <br/>
<a href="add1.php">ADD NEW USER</a></td>
<br/> <br/>
 
      <table border>
      <tr>
        <th>ID</th>
        <th>User_Name</th>
        <!-- <th>PASSWORD</th> -->
        <th>Role</th>
        <th>Update</th>
      </tr> 

      <?php
while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
    echo "<tr>";
    echo "<td>".$row['ID']."</td>";
    echo "<td>".$row['username']."</td>";
  //  echo "<td>".$row['password']."</td>";	
    echo "<td>".$row['role']."</td>";
    echo "<td><a href=\"adduser.php?id=$row[ID]&username=$row[username]\">Edit</a> | <a href=\"delete.php?id=$row[ID]\" onClick =\"return Confirm('Are you sure?')\">Delete</a></td>" ;		
}
?>
<?php $result = $dbconn->query("SELECT * FROM newcreation.tblemployee where status= 'active' ");?>
</table>
<hr/>
<br/> <br/>
<a href="add.php?id=$row[ID]&fname=$row[Efname]\">ADD EMPLOYEE RECORD</a></td>
<br/> <br/>
 
     <table border>
      <tr>
        <th>ID</th>
        <th>First_Name</th>
        <th>Last_Name</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Department</th>
        <th>Rank</th>
        <th>Update</th>
      </tr>
     
<?php
while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
    echo "<tr>";
    echo "<td>".$row['ID']."</td>";
    echo "<td>".$row['Efname']."</td>";
    echo "<td>".$row['Elname']."</td>";	
    echo "<td>".$row['Ebirthdate']."</td>";
    echo "<td>".$row['Egender']."</td>";
    echo "<td>".$row['Edept']."</td>";
    echo "<td>".$row['rank']."</td>";
    echo "<td><a href=\"edit.php?id=$row[ID]&fname=$row[Efname]\">Edit</a> | <a href=\"delete.php?id=$row[ID]\" onClick =\"return Confirm('Are you sure?')\">Delete</a></td>" ;		
}
?>
</table>
</body>
</html>