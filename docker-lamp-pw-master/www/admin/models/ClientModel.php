<?php
class ClientsModel{
    var $result;
   

    public function listCLients(){
        require_once('bd/ConnectClass.php');
        $Oconn = new ConnectClass();
        $Oconn -> openConnect();
        $conn = $Oconn -> getConnect();
        $sql = "SELECT * FROM 'clients";
        $this -> result = $conn -> query($sql);
    }

    public function getConsult(){
        return $this -> result;
    }
}

?>