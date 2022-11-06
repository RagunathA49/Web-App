<?php
class Database{
    
    public static $conn=null;
    public static function getConnection()
    {
        if(Database::$conn == null)
        {
        $servername = "mysql.selfmade.ninja";
        $username = "Ragunath";
        $password = "rkdevil49*";
        $dbname = "Ragunath_new_db";
    
        // Create connection
        $connection = new mysqli($servername, $username, $password, $dbname);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error); 
          }
          else
          {
            // printf("New connection ");
            Database::$conn = $connection;// replacing null iwth connection 
            return Database::$conn;
          }
        }
        else
        {
          printf("Returning existing ");
          return Database::$conn;
        }
    }
}
?>