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
    <ul class="navbar-nav" style="position: relative; left: 50%;">
      <li class="nav-item">
          <button class="btn btn-outline-primary " id="btnCategories">Game Categories</button>
          <button class="btn btn-outline-primary " id="btnExclusives">Exclusive</button>
          <?php
          if(isset($_SESSION['user']) && $_SESSION['user'] != ""){
            echo '<button class="btn btn-outline-primary " id="btnLogin">Logout</button>';
          }else{
            echo '<button class="btn btn-outline-primary " id="btnLogin">Login</button>';
          }
          ?>
      </li>
    </ul>
  </nav>
  <p style="color: white; text-align: center; font-size: 200%">Check our Games!</p>
  <div class="row">
    <div class="col-sm-4">
        <div class="card" id="undertale" style="width:400px">
            <img class="card-img-top" src="src/assets/games/undertale/undertale.png" alt="Undertale">
            <div class="card-body">
              <h4 class="card-title">Undertale on PC,PS4 and SWITCH</h4>
              <p class="card-text">Undertale is a role-playing video game created by American indie developer Toby Fox. 
                In the game, players control a human child who has fallen into the Underground, 
                a large, secluded region underneath the surface of the Earth, separated by a magic 
                barrier.</p>
              <a href="#" class="btn btn-success">Buy</a>
              <a href="#" class="btn btn-info">Details</a>
            </div>
          </div>
    </div>
    <div class="col-sm-4">
        <div class="card" id="crash" style="width:400px;">
            <img class="card-img-top" src="src/assets/games/crash/crash.jpg" alt="Crash">
            <div class="card-body">
              <h4 class="card-title">Crash Bandicoot on PS4 and PC</h4>
              <p class="card-text">Your favorite marsupial, Crash Bandicoot®, is back! He’s enhanced, 
                entranced & ready-to-dance with the N. Sane Trilogy game collection. Now you can 
                experience Crash Bandicoot like never-before in Fur-K. Spin, jump, wump and repeat as you
                 take on the epic challenges and adventures through the three games that started it all, 
                 Crash Bandicoot®, Crash Bandicoot® 2: Cortex Strikes Back and Crash Bandicoot®: Warped. 
                 Relive all your favorite Crash moments!.</p>
              <a href="#" class="btn btn-success">Buy</a>
              <a href="#" class="btn btn-info">Details</a>
            </div>
          </div>
    </div>
    <div class="col-sm-4">
        <div class="card" id="klonoa" style="width:400px">
            <img class="card-img-top" src="src/assets/games/klonoa/klonoa.jpg" alt="Undertale">
            <div class="card-body">
              <h4 class="card-title">Klonoa on Nintendo Wii</h4>
              <p class="card-text">Everything was going well in the land of Phantomile, an idyllic world 
              created by the power of dreams and protected by four benign gods: the Moon God, the Water 
              God, the Wind God and the God of Trees. But that tranquility is about to shatter due to the 
              ise of dark forces that want to turn a dreamland into a nightmare. The brave and young 
              warrior Klonoa will have to save the day and restore calm and harmony in Phantomile. 
              But for this you will need your help!</p>
              <a href="#" class="btn btn-success">Buy</a>
              <a href="#" class="btn btn-info">Details</a>
            </div>
          </div>
    </div>
    </div> <!-- /card -->
  </div> <!-- /row -->
  <br/>
  <!-- Games PC -->
  <p style="color: white; text-align: center; font-size: 200%">Games on PC</p>
  <div class="jumbotron" style="opacity: 0.5">
  dsdsdd
  </div>
  <!-- Games One -->
  <p style="color: white; text-align: center; font-size: 200%">Games on Xbox One</p>
  <div class="jumbotron" style="opacity: 0.5">
  dsdsdd
  </div>
  <!-- Games Nintendo Switch -->
  <p style="color: white; text-align: center; font-size: 200%">Games on Nintendo Switch</p>
  <div class="jumbotron" style="opacity: 0.5">
  dsdsdd
  </div>
  <!-- Games PS4 -->
  <p style="color: white; text-align: center; font-size: 200%">Games on PS4</p>
  <div class="jumbotron" style="opacity: 0.5">
  dsdsdd
  </div>
  
  <footer>
        
  </footer>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>