<?php
    include'includes/common.php';
    if(!isset($_SESSION['id'])){
        header('location:index.php');
    }
    $r_id=$_GET['id'];
    $r_name=$_GET['name'];
    $query="select slot_time,available from slots where rest_id='$r_id' and available='enable' order by slot_time;";
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
      </head>
        <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container banner">
            <div class="jumbotron user1st_jumbo">
                <div class="row">    
                <h2><?php echo $r_name;?></h2>
                </div>
                <div class="row">    
                <h4>Choose from available slots</h4>
                </div>
                <div class="row">
                <?php while($row= mysqli_fetch_array($query_res)){
                    $curr=date("g:ia",strtotime($row['slot_time']));
                    ?>
                <a href="user_rest_page2.php?id=<?php echo $r_id;?>&name=<?php echo $r_name;?>&time=<?php echo $row['slot_time'];?>">
                <div class="col-xs-2 col-xs-offset-1 thumbnail">
                        <div class="caption">
                            <h6><?php echo $curr; ?></h6>
                        </div>
                </div>
                </a>
                <?php } ?>    
                </div>
            </div>
        </div>
        <?php
        //include 'includes/footer.php';
        ?>
            
        </body>
    </html>
