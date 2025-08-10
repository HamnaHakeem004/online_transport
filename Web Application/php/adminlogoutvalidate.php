<?php 
    session_start();
    if (isset($_POST['logout'])) {
    
        session_destroy();
        header("Location:adminLogin.php");
    } else {
        header("Location:index.php");
    }

?>