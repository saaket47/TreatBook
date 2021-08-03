<?php
    include'includes/common.php';
    $email=$_POST['email'];
    $password= md5($_POST['password']);
    $login="select user_id,pass,first_name from users where email_id='$email'";
    $login_q= mysqli_query($con,$login) or die(mysqli_error($con));
    if(mysqli_num_rows($login_q)==0){
        echo"No_email";
    }
    else{
        $row= mysqli_fetch_array($login_q);
        if($row['pass']!=$password){
            echo"No_pass";
        }else{
            $_SESSION['id']=$row['user_id'];
            $_SESSION['name']=$row['first_name'];
            header('location: user1st.php');
        }
    }
?>
