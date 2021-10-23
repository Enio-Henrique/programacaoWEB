<?php
     session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if(!isset($_GET['controller'])){
        require_once('controller/MainController.php');
        $Main = new MainController();
        $Main -> index();

    }else{
        switch ($_REQUEST['controller']){
            case 'main':
                require_once('controller/MainController.php');
                $Main = new MainController();
                if(!isset($_GET['action'])){
                    
                }else{
                    switch ($_REQUEST['action']) {
                        case 'index':
                            $Main -> index();
                        break;  
                        case 'login':
                            $Main -> login();
                        break;  
                       case 'logout':
                            $Main -> logout();
                        break;
                        case 'home':
                            $Main -> home();
                        break;
                    }
                }
            break;

            case 'user':
                require_once('controller/UserController.php');
                $User = new UserController();
                if(!isset($_GET['action'])){

                }else{
                    switch ($_REQUEST['action']) {
                        case 'validateLogin':
                            $User -> validateLogin();  
                        break;
                    }
                }
            break;

            case 'client':
                require_once('controller/ClientController.php');
                $client = new ClientController();

                if(!isset($_GET['action'])){
                    $client -> index();
                }else{
                    switch ($_REQUEST['action']) {
                        case 'register':
                            $client -> register();
                        break;
                        case 'registerView':
                            $client -> registerView();
                        break;
                        case 'listClients':
                            $client -> listClients();
                        break;
                        case 'createClient':
                            $client -> createClient();
                        break;
                        case 'createClientAction':
                            $client -> createClientAction();
                        break;
                        case 'updateClient':
                            $id = $_GET['id'];
                            $client -> updateClient($id);
                        break;
                        case 'updateClientAction':
                            $id = $_GET['id'];
                            $client -> updateClientAction($id);
                        break;
                        case 'deleteClient':
                            $id = $_GET['id'];
                            $client -> deleteClient($id);
                        break;
                    }
                }
            break;

        }
    }
?>