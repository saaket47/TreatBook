<?php 
    include'includes/common.php';
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
        <div class="container sign">
            <div class="banner_content banner_sign">
            <div class="col-xs-offset-3 col-xs-6">
                <div class="panel panel-info sign_form">
                    <div class="">
                        <center><h3>Submit Restaurant Details</h3></center>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="signup_script_rest.php">
                            <div class="form-group">
                                <label class="control-label" for="name">Restaurant name</label>
                                <input class="form-control" type="text" name="name" required="true">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="name">Type of Restaurant (You may give 1-2 types)</label>
                                <input class="form-control" type="text" name="type" required="true">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="pass">Password (Must be 6 to 15 characters)</label>
                                <input class="form-control" type="password" name="pass" pattern=".{6,15}" required="true">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="contact">Contact No.</label>
                                <input class="form-control" type="tel" name="contact" pattern="[0-9]{10}" required="true">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="address">Address</label>
                                <input class="form-control" type="textarea" name="address" required="true">
                            </div>
                            <div class="form-group">
                                <center><button type="submit" class="btn btn-primary">Submit</button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php
        include'includes/footer.php';
        ?>
    </body>
</html>

