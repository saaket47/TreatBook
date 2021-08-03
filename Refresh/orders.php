<?php
    include'includes/common.php';
    if(!isset($_SESSION['id'])){
        header('location:index.php');
    }
    $u_id=$_SESSION['id'];
    $query="select * from bookings where user_id='$u_id' order by order_time desc";
    $query_res= mysqli_query($con,$query) or die(mysqli_error($con));
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
    <script>
        function add_click_func(id){
            var x = document.getElementById('add_div_'+id);
            x.style.display="none";
            var y = document.getElementById('button_order');
            if(y.style.display === "none"){
                y.style.display="block";
            }
            $('#opt_'+id).html("");
            $('#opt_'+id).append('<input id="item'+id+'" name="item'+id+'"" type="number" value="1" min="0" max="9">');
        }
    </script>
      </head>
        <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div class="jumbotron user1st_jumbo">
                <center><h2>Your Orders</h2></center>
            </div>
                <div class="row">
                <?php while($row= mysqli_fetch_array($query_res)){
                    $rid=$row['rest_id'];
                    $r="select rest_name from restaurants where rest_id='$rid'";
                    $r_res= mysqli_query($con,$r) or die(mysqli_error($con));
                    $info=mysqli_fetch_array($r_res);
                    ?>
                <div class="col-xs-offset-1 col-xs-10 thumbnail">
                        <div class="caption row">
                            <div class="col-xs-5">
                            <h4>Booking for</h4><h3><?php echo $info['rest_name'];?></h3>
                            </div>
                            <div class="col-xs-offset-4 col-xs-3">
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
                            <div class="col-xs-5">
                            <h4><?php 
                                            if(is_null($row['order_amt'])){
                                                echo 'Table Booking';
                                            }else{
                                            echo 'Rs'.$row['order_amt'];}?></h4>
                            </div>
                            <div class="col-xs-4">
                            <h4>Today Slot Time</h4><h5><?php echo $row['slot_time'];?></h5>
                            </div>
                            <div class="col-xs-3">
                            <h5>Order Time:<?php echo $row['order_time'];?></h5>
                            </div>
                            <div class="col-xs-offset-4 col-xs-6">
                                <?php if($row['order_status'] === 'Confirmed'){?>
                                <a href="order_dec.php?perp=1&dec=0&o_id=<?php echo $row['order_id']; ?>" class="btn btn-danger">Cancel</a>
                                <?php } ?>
                                <?php if($row['order_status'] === 'Completed' && $row['rated']==='no'){?>
                                <a href="review.php?r_id=<?php echo $row['rest_id']; ?>&o_id=<?php echo $row['order_id']; ?>" class="btn btn-danger">Rate Your Experience!</a>
                                <?php } ?>
                </div>
                        </div>
                </div>
                <?php } ?>    
                </div>
        </div>
        <?php
        //include 'includes/footer.php';
        ?>
            
        </body>
    </html>

