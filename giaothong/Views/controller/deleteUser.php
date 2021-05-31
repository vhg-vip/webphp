<?php
    require '../../db/dbhelper.php';

    $id = $_GET['userid'];
    $sql = "DELETE FROM tbl_user WHERE user_id = '".$id."'";
    // echo $sql;
    execute($sql);
?>