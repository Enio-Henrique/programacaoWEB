<?php 
class SiteController{

    public function home(){
        require_once("views/templates/header.php");
        require('views/pages/home.php');
        require_once('views/templates/footer.php');
    }
    
    public function products(){
        require_once('views/templates/header.php');
        require('views/pages/products.php');
        require_once('views/templates/footer.php');
    }

    public function contacts(){
        require_once('admin/views/templates/header.php');
        require('admin/views/pages/contacts.php');
        require_once('admin/views/templates/footer.php');
    }
}
    

?>