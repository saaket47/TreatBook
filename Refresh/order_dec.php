<?php
    include 'includes/common.php';
    $dec=$_GET['dec'];
    $o_id=$_GET['o_id'];
    if($dec==0){
        $qd="update bookings set order_status='Cancelled' where order_id='$o_id'";
        $qd_res= mysqli_query($con,$qd) or die(mysqli_error($con));
    }else{
        $qd="update bookings set order_status='Completed' where order_id='$o_id'";
    $qd_res= mysqli_query($con,$qd) or die(mysqli_error($con));
    }
    session_start();
    header('location:order_rest.php');
?>

