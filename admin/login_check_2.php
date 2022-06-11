<?php
    session_start();
    if(!isset($_SESSION['login_ok_gv'])){
        header("Location:http://localhost/BTL/login_first.php");
    }
    
?>