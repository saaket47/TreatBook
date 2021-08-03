<?php
    include'includes/common.php';
    if(!isset($_SESSION['id'])){
        header('location:index.php');
    }
    $r_id=$_GET['r_id'];
    $o_id=$_GET['o_id'];
    if(isset($_POST['review'])){
        $r="select rating,no_of_ratings from restaurants where rest_id='$r_id'";
        $r_q= mysqli_query($con,$r) or die(mysqli_error($con));
        $ans= mysqli_fetch_array($r_q);
        $nor=$ans['no_of_ratings'];
        $rating=(($ans['rating']*$nor)+$_POST['review'])/($nor+1);
        $rating=round($rating,1);
        $nor+=1;
        $r1="update restaurants set rating='$rating',no_of_ratings='$nor' where rest_id='$r_id'";
        $r1_q= mysqli_query($con,$r1) or die(mysqli_error($con));
        $r2="update bookings set rated='yes' where order_id='$o_id'";
        $r2_q= mysqli_query($con,$r2) or die(mysqli_error($con));
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
                    <?php if(isset($_POST['review'])){?>
                    <div>
                        Thanks for your feedback!
                    </div>
                    <?php }else{ ?>
                    <div class="col-xs-offset-3 col-xs-6">
                        Rate Your Experience
                    </div>
                    <form method="post" action="#">
                        <div class="form-group">
                                <label class="control-label" for="review"></label><br>
                                <div class="col-xs-offset-2 col-xs-2">
                                <input class="" type="radio" name="review" value="1" required="true">&nbsp;1 <span class="glyphicon glyphicon-star"></span>
                                &emsp;
                                </div>
                                <div class="col-xs-2">
                                <input class="" type="radio" name="review" value="2" required="true">&nbsp;2 <span class="glyphicon glyphicon-star"></span>
                                &emsp;
                                </div>
                                <div class="col-xs-2">
                                <input class="" type="radio" name="review" value="3" required="true">&nbsp;3 <span class="glyphicon glyphicon-star"></span>
                                &emsp;
                                </div>
                                <div class="col-xs-2">
                                <input class="" type="radio" name="review" value="4" required="true">&nbsp;4 <span class="glyphicon glyphicon-star"></span>
                                &emsp;
                                </div>
                                <div class="col-xs-2">
                                <input class="" type="radio" name="review" value="5" required="true">&nbsp;5 <span class="glyphicon glyphicon-star"></span>
                                </div>   
                                </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">
                                Rate!
                            </button>
                        </div>
                    </form>
                </div>
                    <?php } ?>
            </div>
        </div>
        <?php
        //include 'includes/footer.php';
        ?>
            
        </body>
    </html>

