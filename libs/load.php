<?php

include_once 'includes/User.class.php';
include_once 'includes/Database.class.php';
include_once 'includes/Session.class.php';

Session::start();
function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/app/__templates/$name.php";
}

//github push

function validated_credentials($username,$password)
{
    if ($username == "ragu@gmail.com" and $password == "password")
        return true;
    else
        return false;  
}
// function signup($user , $pass,$email, $phone)
// {
//   $conn = Database::getConnection();
//   $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
//   VALUES ('$user', '$pass', '$email', '$phone', '0', '1');";
//   $error = false;
//   if ($conn->query($sql) === true) {
//     $error = false;
//   } else {
//     $error = $conn->error;
//     echo $conn->error;
//   }
//   $conn->close();
//   return $error;
// }