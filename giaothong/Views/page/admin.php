<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <link rel="stylesheet" href=" ../css/admin.css">
    <script src="../js/admin.js"></script>
</head>
<?php
    require '../controller/session.php';
?>
<body>
    <div class="header_admin d-flex justify-content-between">
        <div class="header_admin">
            <span onclick="showSidebar()"><i class="fas fa-bars text-white"></i></span>
            <div class="sidebar_logo">
                <img src="https://img.icons8.com/color/50/000000/police-car.png"/>
                <span class="text-white ml-3">ADMIN</span>
            </div>
        </div>
        
        <a href="login.php"><i class="fas fa-sign-out-alt text-white" style="font-size: 24px; "></i></a>
    </div>
    <div class="admin_body">
        <!-- <div class="col-md-2"> -->
            <div class="sidebar hide-sidebar">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" onclick="showSidebar()" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Người dùng</a>
                    <a class="nav-link" onclick="showSidebar()" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">DS vi phạm</a>
                    <a class="nav-link" onclick="showSidebar()" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Phản ánh</a>
                </div>
            </div>
        <!-- </div> -->
        <div class="content">
            <div class="tab-content" id="v-pills-tabContent">
                <!-- user tab -->
                <div class="tab-pane fade show active mt-3" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <?php
                        require './tableUser.php';
                    ?>
                </div>

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <?php
                        require './tableVipham.php';
                    ?>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <?php
                        require './tableSupport.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        
    </script>
</body>
</html>