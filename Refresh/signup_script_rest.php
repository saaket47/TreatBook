<?php
    include 'includes/common.php';
    $name=mysqli_escape_string($con,$_POST['name']);
    $type=mysqli_escape_string($con,$_POST['type']);
    $password=md5($_POST['pass']);
    $phone=$_POST['contact'];
    $address=mysqli_escape_string($con,$_POST['address']);
    $get="insert into restaurants(rest_name,rest_type,rest_contact,password,rest_address) values('$name','$type','$phone','$password','$address');";
    $get_query= mysqli_query($con,$get) or die(mysqli_error($con));
    session_start();
    $_SESSION['name']=$name;
    $_SESSION['id']= mysqli_insert_id($con);
    $sql = "SELECT rest_id FROM restaurants WHERE rest_name='$name'"; // SQL with parameters
    $sql_query= mysqli_query($con,$sql) or die(mysqli_error($con)); // get the mysqli result
    $row= mysqli_fetch_array($sql_query);
    $_SESSION['rest_id']=$row['rest_id'];
    $use=$row['rest_id'];
    for($x=12; $x<=20;$x++){
        $time= strval($x);
        $time.=':00:00';
        $new_q="insert into slots(rest_id,slot_time,available) values('$use','$time','enable');";
        $new_query= mysqli_query($con,$new_q) or die(mysqli_error($con));
    }
    header('location: rest_menu.php');
            ?>

