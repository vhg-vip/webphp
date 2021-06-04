<?php
    require '../../db/dbhelper.php';

    $data = json_decode($_POST['data_add']);
    print_r($data);
    // echo $user->name;

    $sql = "INSERT INTO tbl_loivipham (biensoxe, loivipham, diadiem, hinhthuc, mucphat, ngaygio, trangthai, phuongtien)  value ('$data->bienso' , '$data->loivipham', '$data->diadiem', '$data->hinhthuc', '$data->mucphat', '$data->thoigian', '$data->trangthai', '$data->phuongtien')";
    echo $sql;
    execute($sql);
?>