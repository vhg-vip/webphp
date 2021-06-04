<?php
    require '../../db/dbhelper.php';

    $sql = "SELECT * FROM tbl_loivipham";
    $res = executeResult($sql);
    $data = json_encode($res);
    echo $data;
?>