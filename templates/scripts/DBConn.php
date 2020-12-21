<?php


class DBConn {

    function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "php-todoList";

        // Create connection
        $this->conn = new mysqli($servername, $username, $password, $db);


    }

}





   