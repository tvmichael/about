<?php

class Model {

    public $conn;

    public function __construct()
    {
        // Create connection
        $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function log(){
        date_default_timezone_set('Europe/Kiev');
        $ip = $_SERVER['REMOTE_ADDR'];
        $agent = $_SERVER['HTTP_USER_AGENT'];
        $date = date('Y-m-d h:i:s');
        //
        $sql = "INSERT INTO log (ip, agent, date) VALUES ('$ip', '$agent', '$date')";
        mysqli_query($this->conn, $sql);
        mysqli_close($this->conn);
    }

}