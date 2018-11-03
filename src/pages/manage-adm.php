<?php
include ("../../validate-adm.php");
$_ADMIN_ROUTE_ = "../../php/Entity/administrator.php";
require_once($_ADMIN_ROUTE_);
$admins = new administrator();
$cant = $admins->admins();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.css">
    <title>Manage Admins</title>
</head>
<body background = "../../src/assets/background_index.png">
<div class="container">
  <div class="row">
    <div class="col-sm">
        <div class="card" id="admin" style="width:250px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Quantity Admins</h4>
              <?php
                echo "<p class='card-text'>Quantity admins are: $cant</p>";
              ?>
            </div>
        </div><!-- card -->
    </div>
</div>
</div><br/>
<div class="jumbotron" style="text-align: center;width: 100%;margin-left: 0%;margin-right: 0%;margin-bottom: 0px; opacity: 0.8;">
<button class="btn btn-danger" onclick="dashboard()">Return to DASHBOARD</button><br>
    <h2>Table of Admins</h2>
    <p>0 = INACTIVE | 1 = ACTIVE</P>
    <?php
        $_ADMIN_ROUTE_ = "../../php/Entity/administrator.php";
        require_once($_ADMIN_ROUTE_);
        $admins = new administrator();
        echo $admins->showAdmins();
    ?>
    <br>
    <h2>Register a New ADMIN</h2>
    <p>BY DEFAULT ADMIN IS INACTIVE.</p>
    <table class="table table-striped table-dark">
        <thead>
            <tr class="bg-primary">
                <th>Name</th>
                <th>Last Name</th>
                <th>Maiden Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>RFC</th>
                <th>Birthdate</th>
                <th>Register</th>
            </tr>
        </thead>
        <tbody>
            <form action="../../php/createAdmin.php" method="POST" id="formCreateAdmin">
            <tr>
                <td><input type="text" class="form-control" placeholder="Name" name="name"></td>
                <td><input type="text" class="form-control" placeholder="Last Name" name="lastName"></td>
                <td><input type="text" class="form-control" placeholder="Maiden Name" name="maidenName"></td>
                <td><input type="text" class="form-control" placeholder="Username" name="username"></td>
                <td><input type="password" class="form-control" placeholder="Password" name="password"></td>
                <td><input type="text" class="form-control" placeholder="RFC" name="RFC"></td>
                <td><input type="date" class="form-control" name="birthdate"></td>
                <th><button type="submit" class="btn btn-outline-primary">Save</button></td>
            </tr>
            </form>
        </tbody>
    </table>
</body>
<script>
    function dashboard(){
        this.location.href = "dashboard.php";
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../../node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>
