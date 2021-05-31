<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/header.css" />

    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href=" ../css/style.css">
</head>

<body>

    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark"   style="background-color: #002463">
            <a class="navbar-brand" href="home.php"><img src="https://img.icons8.com/color/50/000000/police-car.png" /></a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Đăng ký</a>
                        </li>
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link"><i class="far fa-user text-white"></i></a>
                        </li>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
    <header class="ScriptHeader mt-5">
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="rt-heading">
                    <h1 class="text-center">Thông tin tài khoản</h1>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">

                    <!-- Profile -->
                    <div class="user-profile py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent text-center">
                                            <img class="profile_img" src="../Public/images/emoji-15.png" alt="student dp">
                                            <h3>Ishmam Ahasan Samin</h3>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-0"><strong class="pr-1">Student ID:</strong>321000001</p>
                                            <p class="mb-0"><strong class="pr-1">Class:</strong>4</p>
                                            <p class="mb-0"><strong class="pr-1">Section:</strong>A</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th width="30%">Roll</th>
                                                    <td width="2%">:</td>
                                                    <td>125</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Academic Year </th>
                                                    <td width="2%">:</td>
                                                    <td>2020</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Gender</th>
                                                    <td width="2%">:</td>
                                                    <td>Male</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Religion</th>
                                                    <td width="2%">:</td>
                                                    <td>Group</td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">blood</th>
                                                    <td width="2%">:</td>
                                                    <td>B+</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div style="height: 26px"></div>
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- partial -->

                </div>
            </div>
        </div>
    </section>



    <!-- Analytics -->

</body>

</html>