<?php
    include'includes/common.php';
    $name=$_POST['name'];
    $password= md5($_POST['password']);
    $login="select rest_id,password from restaurants where rest_name='$name'";
    $login_q= mysqli_query($con,$login) or die(mysqli_error($con));
    if(mysqli_num_rows($login_q)==0){
        echo"no_such_name";
    }
    else{
        $row= mysqli_fetch_array($login_q);
        if($row['password']!=$password){
            echo"wrong_pass";
        }else{
            $_SESSION['id']=$row['rest_id'];
            $_SESSION['name']=$name;
            $_SESSION['rest_id']=$row['rest_id'];
            echo"Successfully logged in!";
        }
    }
?>
