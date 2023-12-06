<?php
class DatabasesActivity
{
    private static $conn;

    public static function databaseconn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        self::$conn = new mysqli($servername, $username, $password);

        if (self::$conn->connect_error) {
            die("Connection failed: " . self::$conn->connect_error);
        } else {
            echo "Connected successfully";
            return true;
        }
    }

    public static function iscreatedb($databasename)
    {
        $database = $databasename;
        if (self::databaseconn() === true) {
            $sql = "CREATE DATABASE $database";
            if (self::$conn->query($sql) === true) {
                echo "Database created";
            } else {
                echo "Database not created: " . self::$conn->error;
            }
        } else {
            echo "Connected successfully";
        }
    }
}

DatabasesActivity::iscreatedb("aakash");
?>