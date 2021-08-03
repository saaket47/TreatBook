<?php
    include'includes/common.php';
    session_unset();
    session_destroy();
    header('location: index.php');
?>