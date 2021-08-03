<?php 
    include'includes/common.php';
    if(!isset($_SESSION['rest_id'])){
        header('location:index.php');
    }
?>
    <html class="no-js" lang="en">
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
          <script>
            $(function(){
                var c = 0;

                $("#button1").click(function(){
                  c = $("#inputs").val();

                  $("#mydiv").html("");
                  var x = document.getElementById("button2");
                  if (x.style.display === "none") {
                  x.style.display = "block";
                  }
                  for(i=0;i<c;i++){
                        $("#mydiv").append('<input style="color:black;" type="text" placeholder="Item name" id="i_name'+i+'" name="i_name'+i+'" />');
                        $("#mydiv").append('<input style="color:black;" type="number" placeholder="Item price" id="i_price'+i+'" name="i_price'+i+'" /><br/>');
                  }
                });

                /*$("#button2").click(function(){
                    //alert($("#i_name4").val());
                    $.post("file.php",$("#form1").serialize(),function(data){
                        alert(data);
                    });
                });*/

            });
          </script>
        </head>
        <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container sign">
            <div style="border-style:solid;" class="banner_content banner_sign">
                <div class="panel panel-info sign_form col-xs-offset-3 col-xs-6">
                    <div class="">
                        <center><h3>Menu Details</h3></center>
                    
                    </div>
                <div class="panel-body">
                <form id="form1" method="POST" action="rest_menu_script.php">
                Number of items to be added:
                <div class="form-group">
                <input style="color:black;" class="form-contol" type="text" id="inputs" name="inputs" />
                </div>
                <input class="btn btn-primary" type="button" id="button1" value="Create" />
                <div id="mydiv"></div>
                <input class="btn btn-primary" style="display:none;" type="submit" id ="button2" value="Send" />
                </form>
                </div>
                </div>
                <div style="color:white;" class="col-xs-offset-8 col-xs-4">
                    <a href="slot_manage.php">Done? Move to Slot Management Page</a>
                </div>
            </div>
                
        </div>
        <?php
        //include 'includes/footer.php';
        ?>
        </body>
    </html>