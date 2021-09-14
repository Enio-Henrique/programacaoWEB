<?php

class UserController{
    public function validateLogin(){
        require_once('models/UserModel.php');
        $login = $_POST['login'];
        $password = $_POST['password'];
        $UserModel = new UserModel();
        $result = $UserModel -> getUser($login);

        if($user = $result -> fetch_assoc()){
            if($password == $user['password']){
                $_SESSION['login'] = $user;
                header('Location: index.php?controller=main&action=index');
            }
            else{// Senha Incorreta
                print('Senha Incorreta');
            }
        }
            else{
                //senão é sinal que o usuario esta digitando não existe
                print("usuario Não existe");
            }
        }
    }

?>