<?php
class ClientController{
    public function register(){
        require_once('views/templates/header.php');
        require_once('views/client/register.php');
        require_once('views/templates/footer.php');
    }
    public function registerView(){
        if(isset($_POST['accept'])){
            $accept = true;
        }else{
            $accept = false;
        }
        $arrayClient = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'gender' => $_POST['gender'],
            'gen' => $_POST['gen'],
            'accept' => $accept
        );
    }
    public function listClients(){
        require_once('models/ClientModel.php');
        $clientModel = new ClientMoldel();
        $result = $clientModel -> listClients();

        $arrayClient = array();
        while($line -> $result -> fetch_assoc()){
            array_push($arrayClient, $line);
        }
        require_once('views/header.php');
        require_once('views/client/listClients.php');
        require_once('views/footer.php');
    }

}

?>