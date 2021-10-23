<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/validaSex.js" ></script>
    <link rel="stylesheet" href="assets/css/style.css">
  <title>nossa pagina html layout</title>
</head>
<body>
    <header class="aling-middle">
        <h1 >Minha area administrativa</h1>
        <a href="?controller=main&action=logout">Sair</a>
    </header>
    
    <section class="container-fluid">
        <div class="row">
        <nav class="col-2 p-4">
           
            <ul class="nav flex-column">
            <h2>Menu</h2>
                <li class="nav-item">
                   <a class="nav-link"  href="?controller=main&action=home">Home</a>
                </li>
                <h3>Clientes</h3>
                <li  class="nav-item">
                   <a class="nav-link"   href="?controller=client&action=listClients">Lista de Clientes</a>
                </li>
                <li  class="nav-item">
                   <a class="nav-link"   href="?controller=client&action=createClient">- Novo Cliente</a>
                </li>
            </ul>

           
           
        </nav>
        <article class="col-10 p-4">
            
 