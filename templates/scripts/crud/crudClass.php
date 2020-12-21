<?php

include(dirname(__FILE__, 2) . "/DBConn.php");

class CrudClass extends DBConn {

    
    function jova_select_all($sql)
    {
        $result = $this->conn->query($sql);
        $new_result = array();
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
             $new_result[] = $row;
         }
             return $new_result;
        }

        $this->conn->close();
    }
    function jova_prepare($arg, $statement, $bindParam){
        $this->stmt = $this->conn->prepare($arg);
        $this->stmt->bind_param($statement, $bindParam);
        $this->jova_execute_and_close();
    }

    function jova_execute_and_close(){
        $this->stmt->execute();
        $this->stmt->close();
        // $this->stmt->close();
    }

 
    
}

$crudClass = new CrudClass();