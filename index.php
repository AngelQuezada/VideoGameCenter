<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="Font-Awesome/web-fonts-with-css/css/fontawesome.css">
    <link rel="stylesheet" href="css/index_styles.css">
    <title>Login</title>
</head>
<body background="src/assets/background_login.png" width="50%">
<p id="newUser">New Here? <a href="php/forms/signup.php"> <b>Sign Up</a></p></p>
    <p id="localTitle">VideoGame Center</p>
    <div id="divLogin">
        <p id="formTitle">Login</p>
        <form action="login.php" method="POST">
            <input type="text" class="form-control" name="username" id="username" placeholder="Type your Username" style="width: 50%;">
            <input type="password" class="form-control" name="password" id="password" placeholder="Type your Password" style="width: 50%;">
            <button class="btn btn-primary" type="submit" id="btn-Login">Login</button>
        </form>
        <p id="forgotPass">Forgot your password? <b>Just Reset Your Password<a href="php/forms/reset.php"> Here</a></p>
    </div>
    <footer>
        <p id="footer_text">VideoGame Center | A project by: Miguel Angel Quezada Galván < CUCEI/> Seminario de Solución de problemas de Bases de Datos.</p>
    </footer>
</body>
<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="bower_components/jquery/dist/jquery.js"></script>
</html>