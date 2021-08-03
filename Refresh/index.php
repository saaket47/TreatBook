<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    include'includes/common.php';
    if(isset($_SESSION['id'])){
        header('location:user1st.php');
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
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container-fluid banner">
            <div class="banner_content container">
                <h1>Come Treat Yourself!</h1>
                <h6>Book a table, Grab a bite</h6>
                <h5 class="btn btn-danger color_fade btn-lg-active"><a href="signup.php" id="shop_now">Signup</a></h5>
                <h5 class="btn btn-danger color_fade btn-lg-active"><a class="pointer" data-toggle="modal" data-target="#mymodal" id="shop_now">Login</a></h5>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>