<?php
include ("../../validate-adm.php");
$_STATUS_ROUTE_ = "../../php/Entity/status.php";
require_once($_STATUS_ROUTE_);

$status = new status();
$cant = $status->quantityStatus();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.css">
    <title>Manage Status</title>
</head>
<body background="../../src/assets/background_index.png">
<div class="container">
  <div class="row">
    <div class="col-sm">
        <div class="card" id="admin" style="width:250px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Quantity Status</h4>
              <?php
                echo "<p class='card-text'>Quantity status are: $cant</p>";
              ?>
            </div>
        </div><!-- card -->
    </div>
</div>
</div><br>
<div class="jumbotron" style="text-align: center;width: 90%;margin-left: 5%;margin-right: 20%;margin-bottom: 0px; opacity: 0.8;">
    <h2>Table of Status</h2>
    <?php
    $_STATUS_ROUTE_ = "../../php/Entity/status.php";
    require_once($_STATUS_ROUTE_);
    $status = new status();
    echo $status->showStatus();
    ?>
    <br>
<button class="btn btn-danger" onclick="dashboard()">Return to DASHBOARD</button>
</div>
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