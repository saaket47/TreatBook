<!DOCTYPE html>
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
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
        <div class="container about">
            <div class="thumbnail">
            <div class='row'>
                <div class='col-xs-9'>
                    <h3>LIVE SUPPORT</h3>
                    <h4>24 hours | 7 days a week | 365 days a year live technical support</h4>
                    <p>Feel free to contact us over any queries regarding orders received or pending or faulty deliveries.
                    You may even contact us regarding our products.Also feel free to write to us for any issues.</p>
                </div>
                <div class='col-xs-3'>
                    
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-7'>
                    <h3>CONTACT US</h3>
                    <form>
                        <div class='form-group'>
                            <label for='name'>Name</label>
                            <input type='text' name='name' id='msg_name' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='email'>Email</label>
                            <input type='email' name='email' id='msg_email' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='message'>Message</label>
                            <textarea rows='4' cols='30' name='message' id='msg_msg' placeholder="Type your issue here" class='form-control'></textarea>
                        </div>
                        <button class='btn btn-danger' type="submit" id='msg_sub' onclick="func()">SUBMIT</button>
                    </form>
                </div>
                <div class='col-xs-4 col-xs-offset-1'>
                    <h3>COMPANY INFO</h3>
                    <p>30A Fortune Street, Park Street</p>
                    <p>Kolkata: 700 021, West Bengal, India</p>
                    <p>Contact: +91 90000 00000</p>
                    <p>Fax: 12856218947</p>
                    <p>Follow us on: Facebook, Twitter & Instagram</p>
                </div>
            </div>
        </div>
        </div>
        <?php 
            include'includes/footer.php';
        ?>
    </body>
</html>
<script>
    function func(){
        var n = $("#msg_name").val();
        var e = $("#ms_email").val();
        var m = $("#msg_msg").val();
        alert(n+",your issue has been submitted");
    }
</script>