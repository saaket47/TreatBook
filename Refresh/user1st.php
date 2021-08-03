<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    include'includes/common.php';
    if(!isset($_SESSION['id'])){
        header('location:index.php');
    }
?>
<html>
    <head>
        <title>TreatBook</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="bootstrap_css1.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
        <link href="logo.png" rel="icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
    body  {
    background-image: url("images/2813143-scaled-1.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
        }
    </style>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container banner">
            <div class="jumbotron user1st_jumbo">
                <div class="row">
                <div class="lefto">
                    <h1>Hi <?php echo$_SESSION['name'].' !'; ?></h1>
                </div>
                </div>
                <div class="row">
                    <div class="lefto">
                        <h2>Let's Go Treating!</h2>
                    </div>
                </div>
                <div class="row">
                    <a href="orders.php">
                    <div class="col-xs-5 btn btn-danger color_fade">
                        <h4>Check Orders</h4>
                        <img src="del2.png" class="logo-image">
                    </div>
                    </a>
                    <a href='user_search.php'>
                    <div class="col-xs-offset-2 col-xs-5 btn btn-danger color_fade">
                        <h4>Book An Order</h4>
                        <img src="unnamed.png" class="logo-image">
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <?php
        //include 'includes/footer.php';
        ?>
    </body>
</html>
