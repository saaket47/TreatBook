<?php 
    include'includes/common.php';
    if(!isset($_SESSION['rest_id'])){
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
        <div class="container sign">
            <div class="banner_content banner_sign">
                <div class="col-xs-offset-3 col-xs-6 panel panel-info sign_form">
                    <div class="">
                        <center><h3>Slots Available through TreatBook</h3>
                            <br>
                            <h4>Choose to enable or disable them
                            <?php 
                            echo "The time is " . date("H:i:s"); ?></h4></center>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="slot_manage_script.php">
                            <div class="form-group">
                                <label class="control-label" for="gender">12:00pm</label><br>
                                <input class="" type="radio" name="12:00:00" value="enable" checked="true" required="true">&nbsp;Enable
                                &emsp;
                                <input class="" type="radio" name="12:00:00" value="disable" required="true">&nbsp;Disable
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gender">1:00pm</label><br>
                                <input class="" type="radio" name="01:00:00" value="enable" checked="true" required="true">&nbsp;Enable
                                &emsp;
                                <input class="" type="radio" name="01:00:00" value="disable" required="true">&nbsp;Disable
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gender">2:00pm</label><br>
                                <input class="" type="radio" name="02:00:00" value="enable" checked="true" required="true">&nbsp;Enable
                                &emsp;
                                <input class="" type="radio" name="02:00:00" value="disable" required="true">&nbsp;Disable
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gender">3:00pm</label><br>
                                <input class="" type="radio" name="03:00:00" value="enable" checked="true" required="true">&nbsp;Enable
                                &emsp;
                                <input class="" type="radio" name="03:00:00" value="disable" required="true">&nbsp;Disable
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gender">4:00pm</label><br>
                                <input class="" type="radio" name="04:00:00" value="enable" checked="true" required="true">&nbsp;Enable
                                &emsp;
                                <input class="" type="radio" name="04:00:00" value="disable" required="true">&nbsp;Disable
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gender">5:00pm</label><br>
                                <input class="" type="radio" name="05:00:00" value="enable" checked="true" required="true">&nbsp;Enable
                                &emsp;
                                <input class="" type="radio" name="05:00:00" value="disable" required="true">&nbsp;Disable
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gender">6:00pm</label><br>
                                <input class="" type="radio" name="06:00:00" value="enable" checked="true" required="true">&nbsp;Enable
                                &emsp;
                                <input class="" type="radio" name="06:00:00" value="disable" required="true">&nbsp;Disable
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gender">7:00pm</label><br>
                                <input class="" type="radio" name="07:00:00" value="enable" checked="true" required="true">&nbsp;Enable
                                &emsp;
                                <input class="" type="radio" name="07:00:00" value="disable" required="true">&nbsp;Disable
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gender">8:00pm</label><br>
                                <input class="" type="radio" name="08:00:00" value="enable" checked="true" required="true">&nbsp;Enable
                                &emsp;
                                <input class="" type="radio" name="08:00:00" value="disable" required="true">&nbsp;Disable
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
        <?php
        //include 'includes/footer.php';
        ?>
        </body>
    </html>
