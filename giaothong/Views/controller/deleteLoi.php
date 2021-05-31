<?php
    require '../../db/dbhelper.php';

    $id = $_GET['userid'];
    $sql = "DELETE FROM tbl_loivipham WHERE id = '".$id."'";
    echo $sql;
    execute($sql);
?>