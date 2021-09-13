<?php
class ClientsModel{
  
    public function listCLients(){
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "SELECT * FROM 'clients'";

        return $connection -> query($sql);
    }

    public function getConsult(){
        return $this -> result;
    }
}

?>