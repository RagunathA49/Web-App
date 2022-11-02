<?php

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/app/__templates/$name.php";
}



function validated_credentials($username,$password)
{
    if ($username == "ragu@gmail.com" and $password == "password")
        return true;
    else
        return false;  
}
function signup($user , $pass,$email, $phone)
{
    $servername = "mysql.selfmade.ninja";
    $username = "Ragunath";
    $password = "rkdevil49*";
    $dbname = "Ragunath_new_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
VALUES ('$user', '$pass', '$email', '$phone', '0', '1');";
$error = false;
if ($conn->query($sql) === TRUE) {
  $error = false;
} else {
   
  $error = $conn->error;
}
$conn->close();
return $error;
}