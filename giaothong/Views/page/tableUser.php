<!-- <script src="../js/admin.js"></script> -->

<h2 class="text-center mt-3 mb-4">Người dùng</h2>
<div class="table-responsive">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th style="width: 10%;">Tên đăng nhập</th>
                <th style="width: 10%; min-width: 150px;">Họ và tên</th>
                <th style="width: 10%;">Mật khẩu</th>
                <th style="width: 10%;">Email</th>
                <th style="width: 10%;">SĐT</th>
                <th style="width: 5%;">Tuổi</th>
                <th style="width: 5%;">Giới tính</th>
                <th style="width: 10%; min-width: 100px;">Ngày sinh</th>
                <th style="width: 10%;">Nghề nghiệp</th>
                <th style="width: 10%; min-width: 200px;">Địa chỉ</th>
                <th style="width: 20%; min-width: 140px;">Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // require('../../db/dbhelper.php');

            $sql = "SELECT * FROM tbl_user";
            $users = executeResult($sql);

            if($users){
                foreach($users as $key=>$item){
                    echo 
                    '<tr>'
                        .'<td>'.$key.'</td>'
                        .'<td>'.$item['user_name'].'</td>'
                        .'<td>'.$item['user_fullname'].'</td>'
                        .'<td>'.$item['user_password'].'</td>'
                        .'<td>'.$item['user_email'].'</td>'
                        .'<td>'.$item['user_phonenumber'].'</td>'
                        .'<td>'.$item['user_age'].'</td>'
                        .'<td>'.$item['user_gender'].'</td>'
                        .'<td>'.$item['user_birth'].'</td>'
                        .'<td>'.$item['user_job'].'</td>'
                        .'<td>'.$item['user_address'].'</td>'
                        .'<td class="text-center">
                            <button class="btn btn-warning edit editUserModal'.$item['user_id'].'" data-toggle="modal" data-target="#editUserModal'.$item['user_id'].'">Sửa</button>
                            <div class="modal fade" id="editUserModal'.$item['user_id'].'" tabindex="-1" aria-hidden="true">
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
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>User ID</label>
                                                            <input type="text" class="form-control" disabled value="'.$item['user_id'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="name'.$item['user_id'].'">Tên đăng nhập</label>
                                                            <input type="text" class="form-control" required id="name'.$item['user_id'].'" placeholder="Nhập tên đăng nhập" value="'.$item['user_name'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="fullname'.$item['user_id'].'">Họ và tên</label>
                                                            <input type="text" class="form-control" required id="fullname'.$item['user_id'].'" placeholder="Nhập Họ và tên" value="'.$item['user_fullname'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="password'.$item['user_id'].'">Mật khẩu</label>
                                                            <input type="password" class="form-control" required id="password'.$item['user_id'].'" placeholder="Nhập mật khẩu" value="'.$item['user_password'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="age'.$item['user_id'].'">Tuổi</label>
                                                            <input type="number" class="form-control" required id="age'.$item['user_id'].'" placeholder="Nhập tuổi" value="'.$item['user_age'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="birth'.$item['user_id'].'">Ngày sinh</label>
                                                            <input type="date" class="form-control" required id="birth'.$item['user_id'].'" placeholder="Nhập ngày sinh" value="'.$item['user_birth'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="gender'.$item['user_id'].'">Giới tính</label>
                                                            <select class="form-control" required id="gender'.$item['user_id'].'">';
                                                            if($item['user_gender'] === 'Nam'){
                                                                echo '<option selected value="Nam">Nam</option>
                                                                <option value="Nữ">Nữ</option>';
                                                            }
                                                            else{
                                                                echo '<option value="Nam">Nam</option>
                                                                <option selected value="Nữ">Nữ</option>';
                                                            }
                                                            echo '</select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="job'.$item['user_id'].'">Nghề nghiệp</label>
                                                            <input type="text" class="form-control" required id="job'.$item['user_id'].'" placeholder="Nhập nghề nghiệp" value="'.$item['user_job'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email'.$item['user_id'].'">Email</label>
                                                            <input type="email" class="form-control" required id="email'.$item['user_id'].'" placeholder="Nhập email" value="'.$item['user_email'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone'.$item['user_id'].'">Số điện thoại</label>
                                                            <input type="text" class="form-control" required id="phone'.$item['user_id'].'" placeholder="Nhập số điện thoại" value="'.$item['user_phonenumber'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="address'.$item['user_id'].'">Địa chỉ</label>
                                                            <input type="text" class="form-control" required id="address'.$item['user_id'].'" placeholder="Nhập địa chỉ" value="'.$item['user_address'].'">
                                                        </div>
                                                        <p class="error" class="text-center fs-5" style="color: red"></p>
                                                    </div>
                                                </div>
                                                
                                                <button type="button" class="btn btn-success text-end" onclick="editUser('.$item['user_id'].')">Cập nhật</button>
                                                <button type="button" class="btn btn-danger text-end" data-dismiss="modal">Hủy</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal'.$item['user_id'].'")">Xóa</button>
                            <div class="modal fade" id="deleteModal'.$item['user_id'].'" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p id="msg" class="text-center fs-5">Bạn có chắc muốn xóa không?</p>
                                            <button type="button" class="btn btn-danger text-end" onclick="deleteUser('.$item['user_id'].')">Xóa</button>
                                            <button type="button" class="btn btn-secondary text-end" data-dismiss="modal">Hủy</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>'.
                    '</tr>';
                }
            }
        ?>
        </tbody>
    </table>
</div>


