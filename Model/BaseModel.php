<?php
include 'Connection/conn_db.php';
class BaseModel {

    public function getconnobject()
    {
        return $this->conn;
    }

} 

?>