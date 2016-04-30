

<?php
use user;
include './user.php';
session_start();




function register($user,$pass,$firstN,$lastN, $email){
    try{
        
$DB_host = "sql111.byethost5.com";
$DB_user = "b5_17970886";
$DB_pass = "Mirzabaig123@";
$DB_name = "b5_17970886_data";
          $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $qury = "INSERT INTO user (firstName, lastName, userName, password, email) VALUES(:fName, :lName, :Uname, :upass, :email)";
        $stmt = $DB_con->prepare($qury);
        $stmt->bindParam(":fName", $firstN);
        $stmt->bindParam(":lName", $lastN);
        $stmt->bindParam(":Uname", $user);
        $stmt->bindParam(":upass", $pass);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

$userName = $_POST['username'];
$password= password_hash($_POST['password'], PASSWORD_DEFAULT);
$firstName = $_POST['FirstName'];
$lastName =  $_POST['LastName'];
$email =  $_POST['Email'];


if (isset($userName) && isset($password)&& isset($firstName)&& isset($lastName)&& isset($email)){
    if(register($userName, $password, $firstName, $lastName, $email)){
        $_SESSION["FirstName"] = $firstName;
        header("Location: index.php");
    }
    else{
        $_SESSION["Error"] = "Try again";
        header("Location: SignUp.php");
    }
    
}
else{
    $_SESSION["formError"]=" Try again 2";
    header("Location: SignUp.php");
}

 
 
  
?>
    