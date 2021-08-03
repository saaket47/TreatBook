<?php 
    include'includes/common.php';
    if(!isset($_SESSION['rest_id'])){
        header('location:index.php');
    }
    $r_id=$_SESSION['rest_id'];
    $query="select * from bookings where rest_id='$r_id' order by order_time desc";
    $query_res= mysqli_query($con,$query) or die(mysqli_error($con));
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
            
        <div class="container">
            <div class="banner_content banner_sign">
                <center><h3 style="color:white;">Bookings</h3></center>
            </div>
            <?php while($row= mysqli_fetch_array($query_res)){?>
            <div class="row thumbnail">
                <div class="col-xs-4">
                <h4>Order from
                    <?php
                        $u=$row['user_id'];
                        $q1="select first_name from users where user_id='$u'";
                        $q1_res=mysqli_query($con,$q1) or die(mysqli_error($con));
                        $ans= mysqli_fetch_array($q1_res);
                        echo $ans['first_name'];
                    ?>
                </h4>
                </div>
                <div class="col-xs-4">
                    <h4><?php 
                                            if(is_null($row['order_amt'])){
                                                echo 'Table Booking';
                                            }else{
                                            echo 'Rs'.$row['order_amt'];}?></h4>
                </div>
                <div class="col-xs-4">
                            <h4>Status:</h4>
                            <?php if($row['order_status'] === "Confirmed"){?>
                            <h3 style="color:green;"><?php echo $row['order_status'];?></h3>
                            <?php } ?>
                            <?php if($row['order_status'] === "Cancelled"){?>
                            <h3 style="color:red;"><?php echo $row['order_status'];?></h3>
                            <?php } ?>
                            <?php if($row['order_status'] === "Completed"){?>
                            <h3 style="color:green;"><?php echo $row['order_status'];?></h3>
                            <?php } ?>
                            </div>
                <div class="col-xs-4">
                    <h4>Today Slot Time</h4><h5><?php echo $row['slot_time'];?></h5>
                </div>
                <div class="col-xs-offset-4 col-xs-4">
                <h5>Order Time:<?php echo $row['order_time'];?></h5>
                </div>
                <div class="col-xs-offset-3 col-xs-6">
                    <?php if($row['order_status'] === 'Confirmed'){?>
                    <a href="order_dec.php?perp=0&dec=1&o_id=<?php echo $row['order_id']; ?>" class="btn btn-success">Complete</a>
                    <a href="order_dec.php?perp=0&dec=0&o_id=<?php echo $row['order_id']; ?>" class="btn btn-danger">Cancel</a>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php
        //include 'includes/footer.php';
        ?>
        </body>
    </html> 


