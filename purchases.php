<?php
  include ("validate-user.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css">
    <link rel="stylesheet" href="libs/css/fonts.css">
    <title>My purchases</title>
</head>
<button onClick="javascript:history.back();" class="btn waves-effect waves-light" id="btn-cancel" style="background-color: rgba(143, 7, 125, 0.658);">Back to Home
    <i class="material-icons right">cancel</i>
</button>
<body background="src/assets/background_index.png" width="50%">
<div class="jumbotron" style="text-align: center;width: 90%;margin-left: 5%;margin-right: 20%;margin-bottom: 0px;margin-top:2%; opacity:0.8; padding-bottom: 10px; padding-top: 10px; border-radius: 10px;">
    <p style="color: black;text-align: center;font-size: 250%;">MY PURCHASES</p>
</div>
<div class="jumbotron" style="text-align: center;width: 90%;margin-left: 5%;margin-right: 20%;margin-bottom: 0px;margin-top:2%; opacity:0.8; padding-bottom: 10px; padding-top: 10px; border-radius: 10px;">
    <p style="color: black;text-align: center;font-size: 250%;">MY TICKETS</p>
    <?php
        $_TICKET_ROUTE_ = "php/Entity/ticket.php";
        require_once($_TICKET_ROUTE_);
        $ticket = new ticket();
        echo $ticket->showTicketOfUser();
    ?>
</div>
<div class="jumbotron" style="text-align: center;width: 90%;margin-left: 5%;margin-right: 20%;margin-bottom: 0px;margin-top:2%; opacity:0.8; padding-bottom: 10px; padding-top: 10px; border-radius: 10px;">
    <p style="color: black;text-align: center;font-size: 250%;">MY STATUS OF PURCHASE</p>
    <?php
        $_STATUS_ROUTE_ = "php/Entity/status.php";
        require_once($_STATUS_ROUTE_);
        $status = new status();
        echo $status->showStatusOfUser();
    ?>
</div>

</body>
<script src="../../node_modules/materialize-css/dist/js/materialize.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>