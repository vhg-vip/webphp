<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <link rel="stylesheet" href=" ../css/support.css">
    <script src="../js/support.js"></script>
</head>
<body>
    <?php
        require('./header.php');
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: transparent;">
            <li class="breadcrumb-item"><a href="home.php">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hỗ trợ</li>
        </ol>
    </nav>
    <div class="container">
        <h2 class="text-center my-5" style="font-size: 28px; font-weight: 600;">
            Tiếp nhận phản ánh, góp ý và hỗ trợ 
        </h2>
        <div class="row">
            <!-- input  -->
            <div class="col-9 p-0" >
                <div style="background-color: #c6e4ff; border-radius: 20px; padding: 30px;">
                    <form id="myForm">
                        <div class="form-row">
                            <div class="col-3 text">Họ và tên</div>
                            <div class="form-group col-9">
                                <input type="name" class="form-control" id="name" placeholder="Nhập họ và tên" required
                                    oninvalid="this.setCustomValidity('Vui lòng nhập Họ và Tên')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3 text">Số điện thoại</div>
                            <div class="form-group col-9">
                                <input type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại" pattern="[0-9]{10}"
                                    required oninvalid="this.setCustomValidity('Vui lòng nhập Số điện thoại')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3 text">Email</div>
                            <div class="form-group col-9">
                                <input type="email" class="form-control" id="email" placeholder="Nhập địa chỉ email">
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="col-3 text">Nội dung</div>
                            <div class="form-group col-9">
                                <textarea class="form-control" id="content" rows="5" placeholder="Nhập nội dung"
                                    required oninvalid="this.setCustomValidity('Vui lòng nhập nội dung phản ánh')"
                                    oninput="this.setCustomValidity('')"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <button type="submit" class="btn btn-primary submit-bt" onclick="sendFormSupport()">Gửi phản ánh</button>
                                <button class="btn btn-outline-primary" onclick="resetForm();">Nhập lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3">
                <div
                    style=" background-color:rgba(30, 47, 65, 0.1); border-top-right-radius: 4px; border-top-left-radius: 4px; padding: 5px 0px 5px 0px;">
                    <b style=" font-size: 20px; padding:  5px 15px 5px 15px;">Lưu ý</b>
                </div>
                <ul class="text-justify p-2"
                    style="border: solid rgba(30, 47, 65, 0.1) 1px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;">
                    <b style="font-size: 18px;">1. Hệ thống tiếp nhận các phản ánh, kiến nghị về:</b>
                    <ul style="font-size: 14px; ">
                        <li>Các lỗi của website như: trả về kết quả lỗi, kết quả sai với thực tế;</li>
                        <li>Website bị lỗi, treo hoặc không hoạt động bình thường;</li>
                        <li>Những giải pháp, sáng mới trong chức năng của website để website càng thêm phát triển;</li>
                        <li>Thông tin được cung cấp trên trang tin tức của website bị sai lệch, cũ, đã lỗi thời, cần
                            được cập nhật;</li>
                    </ul>
                    <b style="font-size: 18px;">2. Hệ thống không tiếp nhận đơn thư khiếu nại, tố cáo và hướng dẫn giải
                        đáp pháp luật.</b>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Phản ánh thành công</h3>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('form').on('submit', function(event) {
        event.preventDefault();
    }); 
</script>
</html>