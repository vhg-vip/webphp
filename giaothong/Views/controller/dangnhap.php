<?php
    require_once '../../db/dbhelper.php';

    if (session_id() === '') session_start();

    $username = ""; $password = "";
    // print_r($_POST);
    if(!empty($_POST)){
        if(isset($_POST['usernameInput']) && isset($_POST['passwordInput'])){
            $username = $_POST['usernameInput'];
            $password = $_POST['passwordInput'];

            if($username == '' || $password == ''){
                echo 'Vui lòng nhập đầy đủ thông tin';
            }
            else{
                $sql = "SELECT * FROM tbl_user WHERE user_name = '".$username."' AND user_password = '".$password."' ";
                $res = executeResult($sql);
                if($res){
                    // echo $res[0]['user_name'] . '   ' . $res[0]['isAdmin'];
                    $_SESSION['user'] = $username;
                    $_SESSION["login_time_stamp"] = time();
                    if($res[0]['isAdmin'] === '1'){
                        echo 'isAdmin';
                    }
                    else{
                        echo 'ok';
                    }
                }
                else{
                    echo "Tên đăng nhập hoặc mật khẩu không đúng";
                }
            }

            
        }
    }
?>