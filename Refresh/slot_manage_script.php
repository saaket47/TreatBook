<?php
    include 'includes/common.php';
    $_12=$_POST['12:00:00'];
    $_13=$_POST['01:00:00'];
    $_14=$_POST['02:00:00'];
    $_15=$_POST['03:00:00'];
    $_16=$_POST['04:00:00'];
    $_17=$_POST['05:00:00'];
    $_18=$_POST['06:00:00'];
    $_19=$_POST['07:00:00'];
    $_20=$_POST['08:00:00'];
    $x=$_SESSION['rest_id'];
    $s="12:00:00";
    $st="update slots set available='$_12' where rest_id='$x' and slot_time='$s';";
    $st_query= mysqli_query($con,$st) or die(mysqli_error($con));
    $s="13:00:00";
    $st="update slots set available='$_13' where rest_id='$x' and slot_time='$s';";
    $st_query= mysqli_query($con,$st) or die(mysqli_error($con));
    $s="14:00:00";
    $st="update slots set available='$_14' where rest_id='$x' and slot_time='$s';";
    $st_query= mysqli_query($con,$st) or die(mysqli_error($con));
    $s="15:00:00";
    $st="update slots set available='$_15' where rest_id='$x' and slot_time='$s';";
    $st_query= mysqli_query($con,$st) or die(mysqli_error($con));
    $s="16:00:00";
    $st="update slots set available='$_16' where rest_id='$x' and slot_time='$s';";
    $st_query= mysqli_query($con,$st) or die(mysqli_error($con));
    $s="17:00:00";
    $st="update slots set available='$_17' where rest_id='$x' and slot_time='$s';";
    $st_query= mysqli_query($con,$st) or die(mysqli_error($con));
    $s="18:00:00";
    $st="update slots set available='$_18' where rest_id='$x' and slot_time='$s';";
    $st_query= mysqli_query($con,$st) or die(mysqli_error($con));
    $s="19:00:00";
    $st="update slots set available='$_19' where rest_id='$x' and slot_time='$s';";
    $st_query= mysqli_query($con,$st) or die(mysqli_error($con));
    $s="20:00:00";
    $st="update slots set available='$_20' where rest_id='$x' and slot_time='$s';";
    $st_query= mysqli_query($con,$st) or die(mysqli_error($con));
    header('location:slot_manage.php');
    ?>