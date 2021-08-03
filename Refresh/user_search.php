<?php 
    include'includes/common.php';
    if(!isset($_SESSION['id'])){
        header('location:index.php');
    }
    if(!isset($_POST['r_name']) && !isset($_POST['r_address'])){
        $query="select * from restaurants";
        $query_res= mysqli_query($con,$query) or die(mysqli_error($con));
    }else if(isset($_POST['r_name'])){
        $like="%".$_POST['r_name']."%";
        $query="select * from restaurants where rest_name like '$like'";
        $query_res= mysqli_query($con,$query) or die(mysqli_error($con));
    }else{
        $like="%".$_POST['r_address']."%";
        $query="select * from restaurants where rest_address like '$like'";
        $query_res= mysqli_query($con,$query) or die(mysqli_error($con));
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
        <div class="container">
            <div class='row'>
            <div class='jumbotron col-xs-offset-1 col-xs-10'>
                <div class='row'>
                <div class='col-xs-6'>
                    <form id='f1' method="POST" action='user_search.php'>
                <h4>Search By Name</h4>
                <input type='text' id='r_name' name='r_name'>
                <button class='btn btn-primary'>Search</button>
                    </form>
                </div>
                <div class='col-xs-6'>
                    <form id='f2' method="POST" action='user_search.php'>
                <h4>Search By Address</h4>
                <input type='text' id='r_address' name='r_address'>
                <button class='btn btn-primary'>Search</button>
                    </form>
                        
                </div>
                </div>
            </div>
            <div>
            <?php while($row= mysqli_fetch_array($query_res)){ ?>
                <a href='user_rest_page.php?id=<?php echo $row['rest_id'];?>&name=<?php echo $row['rest_name'];?>'>
                <div class="col-xs-12 thumbnail">
                    <div class='row'>
                            <div class='col-xs-offset-1 col-xs-7 c-left'>
                            <?php echo '<h3>'.$row['rest_name'].'</h3>';
                                  if($row['no_of_ratings']!=0){
                                  echo '<h3>'.$row['rating'].'<span class="glyphicon glyphicon-star"></span></h3>';
                                  }
                                  ?>
                                
                            </div>
                            <div class='col-xs-offset-1 col-xs-3 c-right'>
                                <?php echo '<h4>'.$row['rest_type'].'</h4><br>'; ?>
                                <?php echo '<h4>'.$row['rest_address'].'</h4>'; ?>
                            </div>
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

