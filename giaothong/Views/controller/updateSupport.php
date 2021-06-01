<?php
    require '../../db/dbhelper.php';

    $id = $_GET['support_id'];
    $data = json_decode($_GET['data_update']) ;
    // echo $id;
    // print_r($data);

    $sql = "UPDATE tbl_support SET support_name = '".$data->name."',  support_email = '".$data->email."',  support_phonenumber = '".$data->phone."',  support_content = '".$data->content."',  support_status = '".$data->status."' WHERE support_id = '".$id."'";
    echo $sql;
    execute($sql);
    
?>