<?php
    include 'includes/common.php';
    for( $i=0; $i<$_POST["inputs"] ; $i++){
        $item_name=$_POST["i_name".$i];
        $item_price=$_POST["i_price".$i];
        $rest_id=$_SESSION['rest_id'];
        $get="insert into menu(rest_id,item_name,item_price) values('$rest_id','$item_name','$item_price');";
        $get_query= mysqli_query($con,$get) or die(mysqli_error($con));
    }
    header('location: rest_menu.php');
            ?>
