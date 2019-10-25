<?php   include_once ("config.php") ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action = "addnew.php" method = "pOST">
    <label for = ""> First Name </label> <br>
    <input type= "text" name="firstname" > <br/>
    <label for = ""> Last Name </label> <br> <br/>
    <input type= "text" name="lastname" > <br/> <br/>
    <label for = ""> Gender </label> <br>
    <input type= "text" name="gender" >  <br/> <br/>
    <label for = ""> Birth day </label> <br>
    <input type= "date" name="birthday" > <br/> <br/>
    <label for = ""> Department </label> <br>
    <input type= "text" name="department" >  <br/> <br/>
    <label for = ""> Rank </label> <br>
    <input type= "text" name="rank" >  <br/> <br/>
    <input type= "hidden" name="id"  >  <br/> <br/>
    <input type= "submit"  name = "add" value = "ADD"/>  <br/>
 </form>


</form>
</body>
</html>