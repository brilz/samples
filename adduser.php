<?php   include_once ("config.php") ;
if(isset($_POST["adduser"])) 
{
        //$id = $_POST["id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"];
        if(empty($username) || empty($password) || empty($role)) {
            if(empty($username)) { echo " Input User Name  " . "</br>" ;  } 
            if(empty($password)) {echo "Input Password  " . "</br>"  ;  } 
            if(empty($role)) { echo " Input Role" . "</br>" ; } 
            echo "<a href = \"add1.php\">BACK</a> ";
        }
        else {
        $sql = "INSERT INTO newcreation.tblusers "; 
        $sql .= "(username , password , role )";
        $sql .= "values (:uname, md5(:pwd), :role )" ;
        $query = $dbconn->prepare($sql);
        //$query -> bindparam(':id', $id);
        $query -> bindparam(':uname', $username);
        $query -> bindparam(':pwd', $password);
        $query -> bindparam(':role',$role);
        $query -> execute();

        echo "Successfully Added User" . "<br/>";
        echo "<a href = \"index.php\">Back</a>" ;
        }
}
else {
echo "ERROR : restricted Access !  Click  Add first";
}
?>