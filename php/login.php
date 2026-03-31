<?php
include("../config/classes.php");

 if(isset($_POST['btnsub']))
{
    $email = $_POST['email'];
    $pass = SHA1($_POST['password']);

    $obj = new classroom();
    $obj->login($email,$pass);
}

?>