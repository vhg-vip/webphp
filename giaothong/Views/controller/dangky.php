<?php
    require_once '../../db/dbhelper.php';
    
    $username = ""; $password = ""; $cfpassword = "";
    if(!empty($_POST)){

        if(isset($_POST['usernameInput']) && isset($_POST['passwordInput']) && isset($_POST['cfPasswordInput'])){
            $username=$_POST['usernameInput'];
            $password=$_POST['passwordInput'];
            $cfpassword=$_POST['cfPasswordInput'];
            
            $sql='select user_name from tbl_user where user_name like "%'.$_POST['usernameInput'].'%"';
            $res = executeResult($sql);
            $checkUsername = '';
            if($res){
                $checkUsername = $res[0]['user_name'];
            }
            if($username == "" || $password=="" || $cfpassword==""){
                echo 'Vui lòng nhập đầy đủ thông tin';
            }
            else if($password != $cfpassword){
                echo 'Mật khẩu không khớp';
            }
            else if($checkUsername === $username && $checkUsername !== ''){
                echo 'Tên đăng nhập này đã tồn tại';
                exit; 
            }
            else{
                $sqlInsert = 'insert into tbl_user (user_name, user_password)  value ("'.$username.'" , "'.$password.'" )';
                execute($sqlInsert);
                echo 'ok';
                // header("location: http://localhost/code/giaothong/Views/page/login.php");
            }
        }
    }
?>