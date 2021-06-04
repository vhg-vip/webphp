<?php
    require '../../db/dbhelper.php';

    $id = $_GET['userid'];
    $pass = $_GET['new_password'];
    

    $sql = "UPDATE tbl_user SET user_password = '$pass'  WHERE user_id = '$id'";
    echo $sql;
    execute($sql);
?>