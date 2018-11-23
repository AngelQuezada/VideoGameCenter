<?php
include ("../../validate-adm.php");
$_VIDEOGAME_ROUTE_ = "../../php/Entity/videogame.php";
require_once($_VIDEOGAME_ROUTE_);

$videogame = new videogame();
$cant = $videogame->quantityVideogames();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../../libs/css/fonts.css">
    <title>Manage Videogames</title>
</head>
<body background="../../src/assets/background_index.png">
<div class="container">
  <div class="row">
    <div class="col-sm">
        <div class="card" id="admin" style="width:280px">
            <img class="card-img-top" src="">
            <div class="card-body">
              <h4 class="card-title">Quantity Video Games</h4>
              <?php
                echo "<p class='card-text'>Quantity Video Games are: $cant</p>";
              ?>
            </div>
        </div><!-- card -->
    </div>
</div>
</div><br>
<div class="jumbotron" style="text-align: center;width: 100%;margin-left: 0%;margin-right: 0%;margin-bottom: 0px; opacity: 0.8">
<button class="btn btn-danger" onclick="dashboard()">Return to DASHBOARD</button><br>
    <h2>Table of Video Games</h2>
    <?php
        $_VIDEOGAME_ROUTE_ = "../../php/Entity/videogame.php";
        require_once($_VIDEOGAME_ROUTE_);
        $videogame = new videogame();
        echo $videogame->showVideogames();
    ?>
    <br>
    <h2>Register a New Video Game</h2>
    <p>Please copy/paste the Console id and Provider Name Below</p>
    <table class="table table-striped table-dark">
        <thead>
            <tr class="bg-primary">
                <th>Thumbnail</th>
                <th>Company</th>
                <th>Console id</th>
                <th>Title</th>
                <th>Price</th>
                <th>Release Date</th>
                <th>Category</th>
                <th>Description</th>
                <th>Provider Name</th>
                <th>Save</th>
            </tr>
        </thead>
        <tbody>
            <form action="../../php/createVideogame.php" method="POST" id="formCreateVideogame" enctype="multipart/form-data" autocomplete="off">
            <tr>
                <td><input type="file" accept="image/*" class="form-control-file" id="Thumbnail" name="Thumbnail"></td>
                <td><input type="text" class="form-control" placeholder="Company" name="Company"></td>
                <td><input type="text" class="form-control" placeholder="Console Id" name="consoleId"></td>
                <td><input type="text" class="form-control" placeholder="Title" name="Title"></td>
                <td><input type="text" class="form-control" placeholder="Price" name="Price"></td>
                <td><input type="date" class="form-control" name="releaseDate"></td>
                <td><input type="text" class="form-control" placeholder="Category" name="Category"></td>
                <td><input type="text" class="form-control" placeholder="Description" name="Description"></td>
                <td><input type="text" class="form-control" placeholder="Provider Name" name="providerName"></td>
                <th><button type="submit" class="btn btn-outline-primary">Save</button></td>
            </tr>
            </form>
        </tbody>
    </table>
    <h2>Console, Provider & Category Reference Table: </h2>
    <?php
        $_CONSOLE_ROUTE_ = "../../php/Entity/console.php";
        require_once($_CONSOLE_ROUTE_);
        $console = new console();
        echo $console->showConsoles();

        $_PROVIDER_ROUTE_ = "../../php/Entity/provider.php";
        require_once($_PROVIDER_ROUTE_);
        $provider = new provider();
        echo $provider->showProviders();
        
        $_CATEGORY_ROUTE_ = "../../php/Entity/category.php";
        require_once($_CATEGORY_ROUTE_);
        $category = new category();
        echo $category->showCategories();

    ?>
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