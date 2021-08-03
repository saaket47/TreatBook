<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    include'includes/common.php';
    if(isset($_SESSION['rest_id'])){
        header('location:slot_manage.php');
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
        <script>  
 $(document).ready(function(){  
      $('#login_button_rest').click(function(){  
           var name = $('#rest_name').val();  
           var password = $('#rest_password').val();
           if(name !== '' && password !== '')
           {  
                $.ajax({  
                     url:"rest_login.php",  
                     method:"POST",
                     data: {name:name, password:password},
                     success:function(data, status, xhr)
                     {   
                              alert(data);
                              location.reload();
                     }
                 });
                     
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });
});
    </script>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container banner_biz">
            <div class="row">
            <div class="col-xs-offset-4 col-xs-4">
            <div class="panel panel-info sign_form biz">
                    <div class="">
                        <center><h3>Login To Your Restaurant</h3></center>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="rest_login.php">
                      <div class="form-group">
                          <input class="form-control" id='rest_name' name="rest_name" type="text" placeholder="Rest Name" required="true">
                      </div>
                      <div class="form-group">
                          <input class="form-control" id='rest_password' name="rest_password" type="password" placeholder="Password" required="true">
                      </div>
                            <center><button type="button" id="login_button_rest" name="login_button_rest" class="btn btn-danger color_fade">Login</button></center>
                        </form>
                    </div>
                <center><a class="biz" href="biz_details.php">Not linked yet? Sign up!</a></center>
            </div>
            </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
