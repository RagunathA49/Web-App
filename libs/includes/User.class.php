<?php

class User
{
    private $conn;
    public static function signup($user, $pass, $email, $phone)
    {
        $options=[
            'cost'=>9,
        ];

        $pass = password_hash($pass,PASSWORD_BCRYPT,$options);
        $conn=Database::getConnection();
        $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `active`)
        VALUES ('$user', '$pass', '$email', '$phone', '1');";
        if ($conn-> query($sql) === TRUE) {
            $error = false;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $error = $conn->error;
        }
    
        //$conn->close();
        echo $error;
        return $error;
    }
    public static function login($user,$pass)
    {
        
        // $pass =md5($pass);
        $conn=Database::getConnection();
        $sql="SELECT * FROM `auth` WHERE `username` = '$user'";
        $result =  $conn->query($sql);
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            if(password_verify($pass,$row['password'])){
                return $row;
            }else{
                return false;
            }
        }else{
            return false;
        }
        
    }
    public function __construct($username)
    {
        $this->conn=Database::getConnection();
        $this->conn->query();
    }
}