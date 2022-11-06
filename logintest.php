<?php
include 'libs/load.php';

$username = "ragunath";
$password = "ragunath";
$result = null;
if(isset($_GET['logout']))
{
    Session::destroy();
    die("Session Destroy, Login again <a href='logintest.php'>Login Again</a>");
}
if(Session::get('is_loggedin'))
{
    $userdata = Session::get('session_user');
    print("Welcome Back,$userdata[username]");
    $result = $userdata;
}else{
    printf("No Session Found ");
    $result  = User::login($username,$password);
    if($result){
        echo "Login Sucess";
        Session::set('is_loggedin',true);
        Session::set('session_user',$result);
    }else{
        echo "Login Failed";
    }
}
echo <<<EOL
<br><a href="logintest.php?logout">Logout</a>
EOL;