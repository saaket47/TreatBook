<!DOCTYPE html>
<?php 
    include'includes/common.php';
    if(isset($_SESSION['id'])){
        header('location: user1st.php');
    }
?>
<html>
    <head>
        <title>TreatBook</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
        <link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
        <link href="bootstrap_css1.css" rel="stylesheet" type="text/css">
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
            <div class="col-xs-offset-2 col-xs-4">
                <img id="clock" src="logo.png">
            </div>
            <div class="col-xs-4">
                <div class="panel panel-info sign_form">
                    <div class="">
                        <center><h3>SIGNUP</h3></center>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <label class="control-label" for="name">Name</label>
                                <input class="form-control" type="text" name="name" required="true">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gender">Gender</label><br>
                                <input class="" type="radio" name="gender" value="male" required="true">&nbsp;Male
                                &emsp;
                                <input class="" type="radio" name="gender" value="female" required="true">&nbsp;Female
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email">Email</label>
                                <input class="form-control" type="email" name="email" required="true">
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
                                <label class="control-label" for="city">City</label>
                                <input class="form-control" type="text" name="city" required="true">
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