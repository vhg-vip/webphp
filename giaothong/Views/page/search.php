<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href=" ../css/header.css">
</head>

<?php
    // $sql = 'SELECT * FROM tbl_loivipham WHERE biensoxe = ';
    
    $bienso = '';
    if(!empty($_POST)){
        if(isset($_POST['bienso'])){
            $bienso = $_POST['bienso'];
        }
    }
    $res = [];
    if(isset($_GET['bienso']) && $_GET['bienso']!=''){
        $sql='select * from tbl_loivipham where biensoxe like "%'.$_GET['bienso'].'%"';
        $res = executeResult($sql);
    }
    else{
        // $sql = "SELECT * FROM tbl_loivipham";
    }
    
?>
<body>
    <!-- <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark"  style="background-color: #002463" >
        <a class="navbar-brand" href="home.php"><img src="https://img.icons8.com/color/50/000000/police-car.png"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100">
                <div class="d-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="search.php">Tra cứu vi phạm</a>
                    </li>
                </div>
                <div class="d-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Đăng ký</a>
                    </li>
                </div>
            </ul>
        </div>
        </nav>
    </div> -->
    <?php require('./header.php'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: transparent;">
            <li class="breadcrumb-item"><a href="home.php">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tra cứu vi phạm</li>
        </ol>
    </nav>

    <div class="container" style="padding: 0 300px;">
        <h1 class="title mb-5">Tra cứu vi phạm giao thông</h1>
        <form method="get">
            <div class="form-group">
                <label for="exampleInputEmail1">Biển số xe</label>
                <div class="d-flex">
                    <input type="text " class="form-control" name="bienso" placeholder="VD: 90B1-36229" required>
                    <button type="submit" class="btn btn-primary mx-3">Tra cứu</button>
                </div>
            </div>
        </form>
    </div>
    
    <div class="mt-5 container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Thời gian</th>
                    <th>Địa điểm</th>
                    <th>Lỗi vi phạm</th>
                    <th>Hình thức</th>
                    <th>Mức phạt</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($res){
                        foreach($res as $key=>$item){
                            echo 
                            '<tr>'
                                .'<td>'.$key.'</td>'
                                .'<td>'.$item['ngaygio'].'</td>'
                                .'<td>'.$item['diadiem'].'</td>'
                                .'<td>'.$item['loivipham'].'</td>'
                                .'<td>'.$item['hinhthuc'].'</td>'
                                .'<td>'.$item['mucphat'].'</td>'
                                .'<td>'.$item['trangthai'].'</td>'.
                            '</tr>';
                        }
                    }
                    
                ?>
            </tbody>
        </table>
    </div>
    

</body>
</html>



