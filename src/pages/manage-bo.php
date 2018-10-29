<?php
$_USER_ROUTE_ = "../../php/Entity/branchoffice.php";
require_once($_USER_ROUTE_);

$bo = new branchoffice();
$cant = $bo->quantityBranchOffices();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.css">
    <title>Manage Branch Office</title>
</head>
<body style="background: gray">
<div class="container">
  <div class="row">
    <div class="col-sm">
        <div class="card" id="admin" style="width:280px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Branch Offices</h4>
              <?php
                echo "<p class='card-text'>Branch Offices Registered are: $cant</p>";
              ?>
            </div>
        </div><!-- card -->
    </div>
</div>
</div><br>
<div class="jumbotron" style="text-align: center;width: 50%;margin-left: 25%;margin-right: 25%;margin-bottom: 0px;">
    <p>Create Branch Office</p>
    <form action="../../php/createBranchOffice.php" method="POST" id="formEditUsername" autocomplete="off">
        <div class="form-group">
            <label for="branchOfficeName">Branch Office Name</label>
            <input class="form-control" id="branchOfficeName" type="text" name="branchOfficeName" placeholder="Type the BO Name" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input class="form-control" id="address" type="text" name="address" placeholder="Type the Address of BO" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
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