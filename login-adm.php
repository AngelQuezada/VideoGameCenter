<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="libs/css/fonts.css">
    <link rel="stylesheet" href="libs/css/login-adm.css">
    <title>*Admin Login Page*</title>
</head>
<button onClick="mainPage();" class="btn waves-effect waves-light" id="btn-cancel">Return to Main Page
    <i class="material-icons right">cancel</i>
</button>
<body background="src/assets/background_login.png" width="50%">
    <p id="localTitle">VideoGame Center</p>
<div id="divLogin">
    <p id="formTitle">Admin Login</p>
    <form action="login.php" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix" style="color: white">account_circle</i>
          <input id="usuario" type="text" class="validate" required>
          <label for="usuario">Username</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix" style="color: white">lock_outline</i>
         <input id="password" type="password" class="validate" required>
          <label for="password">Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action" id="btn-Login">Login
            <i class="material-icons right">input</i>
         </button>
          <p id="forgotPass">Forgot your password? <b>Just Reset Your Password<a href="php/forms/reset.php"> Here</a></p>
    </form>
  </div>
    <footer>
        <p id="footer_text">VideoGame Center | A project by: Miguel Angel Quezada Galván < CUCEI/> Seminario de Solución de problemas de Bases de Datos.  version: 0.0.1</p>
    </footer>
</body>
<script>
  function mainPage(){
    this.location.href = "index.php";
  }
</script>
<script src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
<script src="node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"></script>
</html>