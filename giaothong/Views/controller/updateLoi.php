<?php
    require '../../db/dbhelper.php';

    $id = $_GET['userid'];
    $data = json_decode($_GET['data_update']) ;
    // echo $id;
    // print_r($data);

    $sql = "UPDATE tbl_loivipham SET biensoxe = '".$data->bienso."',  loivipham = '".$data->loivipham."',  diadiem = '".$data->diadiem."',  hinhthuc = '".$data->hinhthuc."',  mucphat = '".$data->mucphat."',  ngaygio = '".$data->thoigian."',  trangthai = '".$data->trangthai."'  WHERE id = '".$id."'";
    echo $sql;
    execute($sql);
?>