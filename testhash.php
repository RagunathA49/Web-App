<?php

// $pass = isset($_GET['pass']) ? $_GET['pass'] : "RamdomPassworThatIsSecure";
// echo (md5($pass));
$time=microtime(true);
$options=[
    'cost'=>6,];
$pass="some_string";
echo (password_hash($pass, PASSWORD_BCRYPT,$options))."\n";
echo "\n Took :".(microtime(true)-$time). "sec"."\n";



$res='$2y$10$tx9ZLIY1xvvy5Bj2WcJNGu2lmsLn9rKw3J4wI4edTSqaaDyBwFxqG';

if (password_verify('some_string', $res)) {
    echo 'Password is valid!'."\n";
} else {
    echo 'Invalid password.';
}