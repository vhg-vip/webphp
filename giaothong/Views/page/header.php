<?php
    require('../../db/dbhelper.php');

    if(!isset($_SESSION['user'])){
        echo "chua dang nhap";
        header('Location: login.php');
    } 
    else{
        echo $_SESSION["login_time_stamp"];
        if(time()-$_SESSION["login_time_stamp"] > 10*60) 
        {
            session_unset();
            session_destroy();
            header('Location: login.php');
        }
    }
?>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #002463">
        <a class="navbar-brand" href="home.php"><img src="https://img.icons8.com/color/50/000000/police-car.png"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100">
                <div class="d-flex">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Tra cứu vi phạm</a>
                    </li>
                </div>
                <div class="d-flex">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="login.php">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Đăng ký</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="profile.php" class="nav-link"><i class="far fa-user text-white"></i></a>
                    </li>
                    <li class="nav-item" id="logout_btn" >
                        <a href="login.php" class="nav-link"><i class="fas fa-sign-out-alt text-white"></i></a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>
</div>