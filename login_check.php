<?php
    session_start();
    if(!isset($_SESSION['login_ok'])){
        header("Location:http://localhost/BTL/login_first.php");
    }
    

?>