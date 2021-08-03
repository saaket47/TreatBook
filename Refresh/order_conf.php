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
                <h3>Congrats! Your booking is confirmed!</h3>
                <?php 
                    
                ?>
                <div class="row">
                    <div class="col-xs-6">
                        <a href="orders.php">Check your orders</a>
                    </div>
                    <div class="col-xs-6">
                        <a href="user1st.php">Go To Home Page</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        //include 'includes/footer.php';
        ?>
            
        </body>
    </html>
