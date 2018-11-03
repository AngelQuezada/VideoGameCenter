<?php
  include ("validate-user.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="libs/css/fonts.css">
    <link rel="stylesheet" href="libs/css/index.css">
    <title>VIDEOGAME CENTER | Inicio</title>
</head>
<body background="src/assets/background_index.png" width="50%">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="#">VideoGame Center</a>
    <ul class="navbar-nav" style="position: relative; left: 70%;">
      <li class="nav-item">
          <button class="btn btn-outline-primary " onclick="logout()" id="btnLogin">Logout</button>;
      </li>
    </ul>
  </nav>
  <p style="color: white; text-align: center; font-size: 200%">Check our Games!</p>
  <?php
        $_VIDEOGAME_ROUTE_ = "php/Entity/videogame.php";
        require_once($_VIDEOGAME_ROUTE_);
        $videogame = new videogame();
        echo $videogame->cardVideogames();
    ?>
  <!-- Games PC -->
  <p style="color: white; text-align: center; font-size: 200%">Games on PC</p>
  
  <?php
        $_VIDEOGAME_ROUTE_ = "php/Entity/videogame.php";
        require_once($_VIDEOGAME_ROUTE_);
        $videogame = new videogame();
        echo $videogame->cardVideogamesPC();
    ?>

  <!-- Games One -->
  <p style="color: white; text-align: center; font-size: 200%">Games on Xbox One</p>
 
  <?php
        $_VIDEOGAME_ROUTE_ = "php/Entity/videogame.php";
        require_once($_VIDEOGAME_ROUTE_);
        $videogame = new videogame();
        echo $videogame->cardVideogamesXBXONE();
    ?>
  
  <!-- Games Nintendo Switch -->
  <p style="color: white; text-align: center; font-size: 200%">Games on Nintendo Switch</p>
  
  <?php
        $_VIDEOGAME_ROUTE_ = "php/Entity/videogame.php";
        require_once($_VIDEOGAME_ROUTE_);
        $videogame = new videogame();
        echo $videogame->cardVideoGameNSwitch();
    ?>
 
  <!-- Games PS4 -->
  <p style="color: white; text-align: center; font-size: 200%">Games on PS4</p>
  
  <?php
        $_VIDEOGAME_ROUTE_ = "php/Entity/videogame.php";
        require_once($_VIDEOGAME_ROUTE_);
        $videogame = new videogame();
        echo $videogame->cardVideoGamePS4();
    ?>
  <br>
  <footer>
    <p id="footer_text"><a href="login-adm.html" style="color: white; ">Admin Log</a> | VideoGame Center | A project by: Miguel Angel Quezada Galván < CUCEI/> Seminario de Solución de problemas de Bases de Datos.  version: 0.0.1</p>
  </footer>
</body>
<script>
  function logout(){
    alert("You have closed session");
    this.location.href = "logout.php";
  }
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>