<?php
    require '../../db/dbhelper.php';

    $id = $_GET['supportid'];
    $sql = "DELETE FROM tbl_support WHERE support_id = '".$id."'";
    echo $sql;
    execute($sql);
?>