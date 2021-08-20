<?php
/* Database credentials. Assuming you are running MySQL server with default setting (user 'root' with no password) */

    class Database{
    // Property
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "db_pl2";
    var $connection;

    // Method koneksi kedalam database
    function Connect(){
        $this->connection=mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
        return $this->connection;
     }

    }
?>