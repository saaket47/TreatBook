<?php
    include'includes/common.php';
    if(!isset($_SESSION['id'])){
        header('location:index.php');
    }
    $r_id=$_GET['id'];
    $r_name=$_GET['name'];
    $s_time=$_GET['time'];
    $query="select item_id,item_name,item_price from menu where rest_id='$r_id'";
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
                <div class="row">    
                <h2><?php echo $r_name;?></h2>
                </div>
                <div class="row">    
                    <h4>Select Your Order, <a href='just_slot_book.php?r_name=<?php echo 
                    $r_name;?>&s_time=<?php echo $s_time;?>&r_id=<?php echo $r_id;?>'>or continue to confirm slot</a> </h4>
                </div>
            </div>
            <form method="POST" action='order_book.php?r_name=<?php echo 
                    $r_name;?>&s_time=<?php echo $s_time;?>&r_id=<?php echo $r_id;?>'>
                <div class="row">
                <?php while($row= mysqli_fetch_array($query_res)){?>
                <div class="col-xs-offset-1 col-xs-10 thumbnail">
                        <div class="caption row">
                            <div class="col-xs-8">
                            <h5><?php echo $row['item_name']; ?></h5>
                            </div>
                            <div class="col-xs-offset-1 col-xs-1">
                                <h5>Rs.<?php echo $row['item_price']; ?></h5>
                            </div>
                            
                            <div id="add_div_<?php echo $row['item_id']; ?>" class="add_div col-xs-1">
                                
                                <input id="add_button<?php echo $row['item_id']; ?>" onclick="add_click_func(<?php echo $row['item_id']; ?>)"class="btn btn-danger" type="button" value="Add">
                            </div>
                            <div id="opt_<?php echo $row['item_id']; ?>" class="col-xs-1"></div>
                        </div>
                </div>
                <?php } ?>    
                </div>
                <input class="btn btn-primary" style="display:none;" type="submit" id ="button_order" value="Checkout">
                </form>
        </div>
        <?php
        //include 'includes/footer.php';
        ?>
            
        </body>
    </html>
