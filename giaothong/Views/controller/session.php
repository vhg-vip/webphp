<?php
    require('../../db/dbhelper.php');

    if(!isset($_SESSION['user'])){
        // echo "chua dang nhap";
        header('Location: login.php');
    } 
    else{
        // echo $_SESSION["login_time_stamp"];
        
        if(time()-$_SESSION["login_time_stamp"] > 60*60) 
        {
            session_unset();
            session_destroy();
            header('Location: login.php');
        }
    }
?>