<?php
    include 'includes/common.php';
    $uid=$_SESSION['id'];
    $rid=$_GET['r_id'];
    $rname=$_GET['r_name'];
    $stime=$_GET['s_time'];
    $order_time=date("Y-m-d H:i:s");
    $getf="insert into bookings(user_id,rest_id,slot_time,order_status,order_time) values('$uid','$rid','$stime','Confirmed','$order_time');";
    $getf_query= mysqli_query($con,$getf) or die(mysqli_error($con));
    header('location:order_conf.php');
?>
