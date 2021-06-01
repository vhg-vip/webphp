<link rel="stylesheet" href=" ../css/header.css">

<?php
    require '../controller/session.php';
    $username = ($_SESSION['user']);
    $sql = "SELECT * FROM tbl_user WHERE user_name = '$username'";
    // echo $sql;
    $user = executeResult($sql);
    // print_r($profile )
?>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #002463">
        <a class="navbar-brand" href="home.php"><img src="https://img.icons8.com/color/50/000000/police-car.png"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 justify-content-between">
                <div class="d-flex">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Tra cứu vi phạm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="support.php">Hỗ trợ</a>
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
                        <a href="profile.php" class="nav-link"><i class="far fa-user text-white mr-3"></i><?php echo $user[0]['user_name'] ?></a>
                    </li>
                    <li class="nav-item" id="logout_btn" >
                        <a href="login.php" class="nav-link"><i class="fas fa-sign-out-alt text-white"></i></a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>
</div>