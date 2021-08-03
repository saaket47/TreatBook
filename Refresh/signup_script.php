<?php
    include 'includes/common.php';
    $email=mysqli_escape_string($con,$_POST['email']);
    $name=mysqli_escape_string($con,$_POST['name']);
    $password=md5($_POST['pass']);
    $phone=$_POST['contact'];
    $city=mysqli_escape_string($con,$_POST['city']);
    $address=mysqli_escape_string($con,$_POST['address']);
    $gender=$_POST['gender'];
    $get="insert into users(email_id,first_name,gender,number,pass,city,address) values('$email','$name','$gender','$phone','$password','$city','$address');";
    $get_query= mysqli_query($con,$get) or die(mysqli_error($con));
    session_start();
    $_SESSION['name']=$name;
    $_SESSION['id']= mysqli_insert_id($con);
    header('location: user1st.php');
            ?>
