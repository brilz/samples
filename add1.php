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
    
<form action = "adduser.php" method = "pOST">
    <label for = ""> User Name </label> <br>
    <input type= "text" name="username" > <br/>
    <label for = ""> Password </label> <br> <br/>
    <input type= "password" name="password" > <br/> <br/>
    <label for = ""> Role </label> <br>
    <input type= "text" name="role" >  <br/> <br/>
    <input type= "hidden" name="id"  >  <br/> <br/>
    <input type= "submit"  name = "adduser" value = "ADD"/>  <br/>
 </form>


</form>
</body>
</html>