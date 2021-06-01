<?php
    require '../../db/dbhelper.php';

    $data = json_decode($_POST['data_add']);
    // print_r($data);
    // echo $user->name;

    $sql = "INSERT INTO tbl_support (support_name, support_email, support_phonenumber, support_content)  value ('$data->name' , '$data->email', '$data->phone', '$data->content')";
    // echo $sql;
    execute($sql);
    echo 'ok';
?>