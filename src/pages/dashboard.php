<?php
    include ("../../validate-adm.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../../libs/css/fonts.css">
    <link rel="stylesheet" href="../../libs/css/dashboard.css">
    <title>Admin-Dashboard</title>
</head>
<body background="../../src/assets/background_dashboard.png">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="background-color: rgba(61, 4, 78, 0.842)!important;">
    <a class="navbar-brand" href="#">VideoGame Center DASHBOARD</a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <button class="btn btn-outline-danger " id="btnLogout" onclick="logout()">Logout</button>
      </li>
      <li class="nav-item">
        <a href="https://github.com/AngelQuezada/VideoGameCenter" target="_blank"><p style="color:white;">Github Repository.<p></a>
      </li>
    </ul>
  </nav>
<div class="container">
  <div class="row">
    <div class="col-sm">
        <div class="card" id="admin" style="width:200px;background-color: rgba(126, 10, 10, 0.726);border: 3px solid white;">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Admins</h4>
              <p class="card-text" style="color:white">Configure Admins</p>
              <button class="btn btn-success" style="display: block;background-color: rgba(28, 11, 214, 0.507);" onclick="manageAdmin()">Manage Admin</button>
            </div>
        </div><!-- card -->
    </div>
    <div class="col-sm">
        <div class="card" id="videogame" style="width:200px; background-color: rgba(101, 126, 10, 0.726);border: 3px solid white; text-align:center">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Videogames</h4>
              <p class="card-text" style="color:white;">Add/View</p>
              <button class="btn btn-success" style="display: block;background-color: rgba(214, 11, 153, 0.507);" onclick="manageVideogame()">Manage VGames</button>
            </div>
        </div><!-- card -->
    </div>
    <div class="col-sm">
        <div class="card" id="console" style="width:200px;background-color: rgba(10, 126, 39, 0.726);border: 3px solid white; text-align:center; ">
            <img class="card-img-top">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Consoles</h4>
              <p class="card-text" style="color:white;">View Consoles</p>
              <button class="btn btn-success" style="display: block;background-color: rgba(203, 255, 14, 0.507);" onclick="manageConsole()">Manage Consoles</button>
            </div>
        </div><!-- card -->
    </div>
    <div class="col-sm">
        <div class="card" id="category" style="width:200px; background-color: rgba(10, 126, 126, 0.726);border: 3px solid white; text-align:center;">
            <img class="card-img-top">
            <div class="card-body">
              <h4 class="card-title" style="color:white">Categories</h4>
              <p class="card-text" style="color:white">View Categories</p>
              <button class="btn btn-success" style="display: block;background-color: rgba(14, 255, 34, 0.507);" onclick="manageCategory()">Manage Categories</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
    <div class="col-sm">
        <div class="card" id="provider" style="width:200px; background-color: rgba(10, 18, 126, 0.726);border: 3px solid white; text-align:center;">
            <img class="card-img-top">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Providers</h4>
              <p class="card-text" style="color:white;">Add/View Provider</p>
              <button class="btn btn-success" style="display: block;background-color: rgba(250, 250, 250, 0.507);" onclick="manageProvider()">Manage Providers</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
    <div class="col-sm">
        <div class="card" id="status" style="width:200px;background-color: rgba(116, 10, 126, 0.726);border: 3px solid white; text-align:center;">
            <img class="card-img-top">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Status</h4>
              <p class="card-text" style="color:white;">Manage shipping status</p>
              <button class="btn btn-success" style="display: block; background-color: rgba(255, 28, 255, 0.507);" onclick="manageStatus()">Manage Status</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
    <div class="col-sm">
        <div class="card" id="stock" style="width:200px;background-color: rgba(214, 0, 214, 0.726);border: 3px solid white; text-align:center;">
            <img class="card-img-top">
            <div class="card-body">
              <h4 class="card-title" style="color:white">Stock</h4>
              <p class="card-text" style="color:white;">Add/Edit Stock</p>
              <button class="btn btn-success" style="display: block;background-color: rgba(255, 255, 255, 0.918); color:black;" onclick="manageStock()">Manage Stock</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
    <div class="col-sm">
        <div class="card" id="ticket" style="width:200px; background-color: rgba(126, 80, 10, 0.726);border: 3px solid white; text-align:center;">
            <img class="card-img-top">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Tickets</h4>
              <p class="card-text"style="color:white;">View Tickets</p>
              <button class="btn btn-success" style="display: block;background-color: rgba(67, 32, 221, 0.562);" onclick="manageTicket()">Manage Tickets</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
    <div class="col-sm">
        <div class="card" id="branchoffice" style="width:200px; background-color: rgba(0, 214, 18, 0.726);border: 3px solid white; text-align:center;">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Branch Offices</h4>
              <p class="card-text" style="color:white;">Add Branch Office</p>
              <button class="btn btn-success" style="display: block;background-color: rgba(221, 32, 111, 0.562);" onclick="manageBo()">Manage BO</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
    <div class="col-sm">
        <div class="card" id="user" style="width:200px; background-color: rgba(4, 1, 36, 0.726);border: 3px solid white; text-align:center;">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Users</h4>
              <p class="card-text" style="color:white;">Edit Users</p>
              <button class="btn btn-success" style="display: block;background-color: rgb(208, 221, 32);color:black;" onclick="manageUser()">Manage Users</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
  </div>
</div>
<footer>
        <p id="footer_text">VideoGame Center | A project by: Miguel Angel Quezada Galván < CUCEI/> Seminario de Solución de problemas de Bases de Datos.  version: 1.1.1</p>
    </footer>
</body>
<script>
    function logout(){
        alert("Yout have closed session");
        this.location.href = "../../logout-adm.php"
    }
    function manageAdmin(){
        this.location.href = "manage-adm.php";
    }
    function manageVideogame(){
        this.location.href = "manage-videogame.php";
    }
    function manageConsole(){
        this.location.href = "manage-console.php";
    }
    function manageCategory(){
        this.location.href = "manage-category.php";
    }
    function manageProvider(){
        this.location.href = "manage-provider.php";
    }
    function manageStatus(){
        this.location.href = "manage-status.php";
    }
    function manageStock(){
        this.location.href = "manage-stock.php";
    }
    function manageTicket(){
        this.location.href = "manage-ticket.php";
    }
    function manageBo(){
        this.location.href = "manage-bo.php";
    }
    function manageUser(){
        this.location.href = "manage-user.php";
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../../node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>