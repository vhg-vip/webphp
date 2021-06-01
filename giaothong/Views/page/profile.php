<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/header.css" />

    <link rel="stylesheet" href="../css/profiles.css">
    <script src="../js/profile.js"></script>
</head>

<body>

    <?php 
        require('./header.php');

        $username = ($_SESSION['user']);
        $sql = "SELECT * FROM tbl_user WHERE user_name = '$username'";
        // echo $sql;
        $profile = executeResult($sql);
        // print_r($profile )
    ?>
    <header class=" mt-5">
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
                                            <img class="profile_img" src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" alt="student dp">
                                            
                                            <h3><?php echo $profile[0]['user_fullname'] ?></h3>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-0"><strong class="pr-1">Tên đăng nhập:</strong><?php echo $profile[0]['user_name'] ?></p>
                                            <p class="mb-0"><strong class="pr-1">Tuổi:</strong><?php echo $profile[0]['user_age'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card shadow-sm h-100">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th width="30%">Giới tính</th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $profile[0]['user_gender'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Ngày sinh</th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $profile[0]['user_birth'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Số điện thoại</th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $profile[0]['user_phonenumber'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Email </th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $profile[0]['user_email'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Địa chỉ</th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $profile[0]['user_address'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Nghề nghiệp</th>
                                                    <td width="2%">:</td>
                                                    <td><?php echo $profile[0]['user_job'] ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-right">

                                <!-- edit profile modal -->
                                <button class="btn btn-info edit" data-toggle="modal" data-target="#editProfile">Chỉnh sửa</button>
                                <div class="modal fade" id="editProfile" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="name">Tên đăng nhập</label>
                                                                <?php 
                                                                    echo '<input type="text" class="form-control" required id="name" placeholder="Nhập tên đăng nhập" value="'.$profile[0]['user_name'].'">'
                                                                ?>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 d-none">
                                                            <div class="form-group">
                                                                <label for="password">Mật khẩu</label>
                                                                <?php 
                                                                    echo '<input type="password" class="form-control" required id="password" placeholder="Nhập mật khẩu" value="'.$profile[0]['user_name'].'">'
                                                                ?>
                                                                
                                                            </div>
                                                        </div>      
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="fullname">Họ và tên</label>
                                                                <?php
                                                                    echo '<input type="text" class="form-control" required id="fullname" placeholder="Nhập họ và tên" value="'.$profile[0]['user_fullname'].'">'
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="age">Tuổi</label>
                                                                <?php
                                                                    echo '<input type="number" class="form-control" required id="age" placeholder="Nhập tuổi" value="'.$profile[0]['user_age'].'">';
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="birth">Ngày sinh</label>
                                                                <?php
                                                                    echo '<input type="date" class="form-control" required id="birth" placeholder="Nhập ngày sinh" value="'.$profile[0]['user_birth'].'">';
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="gender">Giới tính</label>
                                                                <?php
                                                                    if($profile[0]['user_gender'] === 'Nam'){
                                                                        echo '<select class="form-control" required id="gender">
                                                                            <option selected value="Nam">Nam</option>
                                                                            <option value="Nữ">Nữ</option>
                                                                        </select>';
                                                                    }
                                                                    else{
                                                                        echo '<select class="form-control" required id="gender">
                                                                            <option value="Nam">Nam</option>
                                                                            <option selected value="Nữ">Nữ</option>
                                                                        </select>';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="job">Nghề nghiệp</label>
                                                                <?php
                                                                    echo '<input type="text" class="form-control" required id="job" placeholder="Nhập nghề nghiệp" value="'.$profile[0]['user_job'].'">'
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <?php
                                                                    echo '<input type="email" class="form-control" required id="email" placeholder="Nhập email" value="'.$profile[0]['user_email'].'">'
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="phone">Số điện thoại</label>
                                                                <?php
                                                                    echo '<input type="text" class="form-control" required id="phone" placeholder="Nhập số điện thoại" value="'.$profile[0]['user_phonenumber'].'">'
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="address">Địa chỉ</label>
                                                                <?php
                                                                    echo '<input type="text" class="form-control" required id="address" placeholder="Nhập địa chỉ" value="'.$profile[0]['user_address'].'">'
                                                                ?>
                                                            </div>
                                                            <p class="error" class="text-center fs-5" style="color: red"></p>
                                                        </div>
                                                    </div>
                                                    
                                                    <?php
                                                        echo '<button type="button" class="btn btn-success text-end" onclick="updateProfile('.$profile[0]['user_id'].')">Cập nhật</button>'
                                                    ?>
                                                    <button type="button" class="btn btn-danger text-end" data-dismiss="modal">Hủy</button>
                                                </form>
                                            </div>
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