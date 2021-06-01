<?php
    require '../../db/dbhelper.php';

    $id = $_GET['userid'];
    $user = json_decode($_GET['user_update']) ;
    print_r($user);
    // echo $user->name;

    $sql = "UPDATE tbl_user SET user_name = '".$user->name."',  user_age = '".$user->age."',  user_email = '".$user->email."',  user_phonenumber = '".$user->phone."',  user_password = '".$user->password."',  user_address = '".$user->address."',  user_fullname = '".$user->fullname."',  user_gender = '".$user->gender."',  user_birth = '".$user->birth."',  user_job = '".$user->job."'  WHERE user_id = '".$id."'";
    echo $sql;
    execute($sql);
?>