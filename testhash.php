<?php

$pass = isset($_GET['pass']) ? $_GET['pass'] : "RamdomPassworThatIsSecure";
echo (md5($pass));