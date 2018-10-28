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
    <title>Admin-Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="#">VideoGame Center | DASHBOARD</a>
    <ul class="navbar-nav">
      <li class="nav-item">
          <button class="btn btn-outline-danger " id="btnLogout" onclick="logout()">Logout</button>
      </li>
    </ul>
  </nav>
<div class="container">
  <div class="row">
    <div class="col-sm">
        <div class="card" id="admin" style="width:200px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Admins</h4>
              <p class="card-text">Configure Admins</p>
              <button class="btn btn-success" style="display: block" onclick="manageAdmin()">Manage Admin</button>
            </div>
        </div><!-- card -->
    </div>
    <div class="col-sm">
        <div class="card" id="videogame" style="width:200px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Videogames</h4>
              <p class="card-text">Add/Quit Videogames</p>
              <button class="btn btn-success" style="display: block" onclick="manageVideogame()">Manage Videogames</button>
            </div>
        </div><!-- card -->
    </div>
    <div class="col-sm">
        <div class="card" id="console" style="width:200px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Consoles</h4>
              <p class="card-text">Add/Quit Console</p>
              <button class="btn btn-success" style="display: block" onclick="manageConsole()">Manage Consoles</button>
            </div>
        </div><!-- card -->
    </div>
    <div class="col-sm">
        <div class="card" id="category" style="width:200px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Categories</h4>
              <p class="card-text">Add/Quit Category</p>
              <button class="btn btn-success" style="display: block" onclick="manageCategory()">Manage Categories</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
    <div class="col-sm">
        <div class="card" id="provider" style="width:200px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Providers</h4>
              <p class="card-text">Add/Quit Provider</p>
              <button class="btn btn-success" style="display: block" onclick="manageProvider()">Manage Providers</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
    <div class="col-sm">
        <div class="card" id="status" style="width:200px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Status</h4>
              <p class="card-text">Manage shipping status</p>
              <button class="btn btn-success" style="display: block" onclick="manageStatus()">Manage Status</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
    <div class="col-sm">
        <div class="card" id="stock" style="width:200px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Stock</h4>
              <p class="card-text">Add/Edit Stock</p>
              <button class="btn btn-success" style="display: block" onclick="manageStock()">Manage Stock</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
    <div class="col-sm">
        <div class="card" id="ticket" style="width:200px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Tickets</h4>
              <p class="card-text">View Tickets</p>
              <button class="btn btn-success" style="display: block" onclick="manageTicket()">Manage Tickets</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
    <div class="col-sm">
        <div class="card" id="branchoffice" style="width:200px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Branch Offices</h4>
              <p class="card-text">Add Branch Office</p>
              <button class="btn btn-success" style="display: block" onclick="manageBo()">Manage BO</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
    <div class="col-sm">
        <div class="card" id="user" style="width:200px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Users</h4>
              <p class="card-text">Edit Users</p>
              <button class="btn btn-success" style="display: block" onclick="manageUser()">Manage Users</button>
            </div>
        </div><!-- card -->
    </div><!--col-sm -->
  </div>
</div>
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