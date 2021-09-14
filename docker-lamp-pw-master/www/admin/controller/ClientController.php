<?php
class ClientController{
    public function register(){
        require_once('views/templates/header.php');
        require_once('views/client/register.php');
        require_once('views/templates/footer.php');
    }
    public function registerView(){
        if(!isset($_POST['accept'])){
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
        require_once('views/templates/header.php');
        require_once('views/client/registerView.php');
        require_once('views/templates/footer.php');
    }
    public function listClients(){
        require_once('admin/models/ClientModel.php');
        $clientModel = new ClientModel();
      $result = $clientModel -> listClients();

        $arrayClients = array();

        while($clients = $result -> fetch_assoc()){
           array_push($arrayClients, $clients);
         }

        require_once('views/templates/header.php');
        require_once('views/client/listClients.php');
        require_once('views/templates/footer.php');
    }

}

?>