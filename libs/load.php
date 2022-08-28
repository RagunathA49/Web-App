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