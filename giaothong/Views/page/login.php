<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href=" ../css/login.css">
</head>
<body>
    <?php
        require('../../db/dbhelper.php');

        if(isset($_SESSION['user'])){
            // echo 'session destroy';
            // unset($_SESSION['PHPSESSID']);
            session_destroy();
        }
        else{
            // echo "chua co session";
        }
        
    ?>
    <div class="login_container">
        <div style="width: 300px">
            <h1 class="login_title">Đăng nhập</h1>
            <p class="text-center">Bạn chưa có tài khoản? <a href="signup.php">Đăng ký</a></p>
            <form id="login_form">
                <div class="form-group">
                  <label >Tên đăng nhập</label>
                  <input type="text" class="form-control login_input" name="usernameInput">
                </div>
                <div class="form-group">
                  <label>Mật khẩu</label>
                  <input type="password" class="form-control login_input" name="passwordInput">
                </div>
                <p id="error" style="color:red;"></p>
                <button id="login_btn" type="submit" class="btn btn-primary w-100 mt-4">Đăng nhập</button>
            </form>
        </div>
    </div>

    <script>
        $('form').on('submit', function(event) {
            event.preventDefault();
        }); 
        $("#login_btn").click(function(){
            $.ajax({
                method: "POST",
                url: "../controller/dangnhap.php",
                data: $("#login_form").serialize(),//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
                success : function(response){
                    console.log(response);
                    if(response === 'ok'){
                        location.replace('./home.php');
                    }
                    else{
                        $("#error").text(response);
                    }
                }
            });
        });
    </script>
</body>
</html>