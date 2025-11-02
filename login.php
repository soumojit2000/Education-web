<?php

session_start();

if(isset($_SESSION['username'])){
  header("Location:dashboard.php");
  exit;
}

$correct_username="Soumojit";
$correct_email="soumojitdutta0542@gmail.com";


if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username=$_POST['username'];
    $email=$_POST['email'];

    if($username===$correct_username && $email===$correct_email){
        $_SESSION['username']=$username;
        $_SESSION['email']=$email;

        setcookie("username", $username, time() + 3600, "/");
        setcookie("email", $email, time() + 3600, "/");

        header("Location: dashboard.php");
        exit;
    }else{
        echo "<p style='color:red;'><b>Wrong username/email!</b></p>";
    }
}
?>