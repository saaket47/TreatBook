<?php
    include 'includes/common.php';
    $order_arr=array();
    $order_amt=0;
    foreach( $_POST as $var => $var_val){
        $id= substr($var, 4);
        array_push($order_arr, $id, $var_val);
        $qs="select item_price from menu where item_id='$id'";
        $qs_query= mysqli_query($con,$qs) or die(mysqli_error($con));
        $row=mysqli_fetch_array($qs_query);
        $order_amt+=$var_val*$row['item_price'];
    }
    $uid=$_SESSION['id'];
    $rid=$_GET['r_id'];
    $rname=$_GET['r_name'];
    $stime=$_GET['s_time'];
    $order_menu= implode(",", $order_arr);
    $order_time=date("Y-m-d H:i:s");
    $getf="insert into bookings(user_id,rest_id,slot_time,order_amt,order_status,order_menu,order_time) values('$uid','$rid','$stime','$order_amt','Confirmed','$order_menu','$order_time');";
    $getf_query= mysqli_query($con,$getf) or die(mysqli_error($con));
    header('location:order_conf.php');
?>
