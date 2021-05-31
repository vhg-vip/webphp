<?php
    require '../../db/dbhelper.php';

    $data = json_decode($_POST['data_add']);
    print_r($data);
    // echo $user->name;

    $sql = "INSERT INTO tbl_loivipham (biensoxe, loivipham, diadiem, hinhthuc, mucphat, ngaygio, trangthai)  value ('$data->bienso' , '$data->loivipham', '$data->diadiem', '$data->hinhthuc', '$data->mucphat', '$data->thoigian', '$data->trangthai')";
    echo $sql;
    execute($sql);
?>