<script src="../js/admin.js"></script>

<h2 class="text-center mt-3 mb-4">Người dùng</h2>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th style="width: 15%;">Tên đăng nhập</th>
            <th style="width: 10%;">Mật khẩu</th>
            <th style="width: 10%;">Email</th>
            <th style="width: 10%;">SĐT</th>
            <th style="width: 10%;">Tuổi</th>
            <th style="width: 15%;">Địa chỉ</th>
            <th style="width: 20%;">Hành động</th>
        </tr>
    </thead>
    <tbody>
    <?php
        require('../../db/dbhelper.php');

        $sql = "SELECT * FROM tbl_user";
        $users = executeResult($sql);

        if($users){
            foreach($users as $key=>$item){
                echo 
                '<tr>'
                    .'<td>'.$key.'</td>'
                    .'<td>'.$item['user_name'].'</td>'
                    .'<td>'.$item['user_password'].'</td>'
                    .'<td>'.$item['user_email'].'</td>'
                    .'<td>'.$item['user_phonenumber'].'</td>'
                    .'<td>'.$item['user_age'].'</td>'
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
                                                        <label for="username'.$item['user_id'].'">Tên</label>
                                                        <input type="text" class="form-control" required id="username'.$item['user_id'].'" placeholder="Nhập tên user" value="'.$item['user_name'].'">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="password'.$item['user_id'].'">Mật khẩu</label>
                                                        <input type="text" class="form-control" required id="password'.$item['user_id'].'" placeholder="Nhập mật khẩu" value="'.$item['user_password'].'">
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
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="age'.$item['user_id'].'">Tuổi</label>
                                                        <input type="number" class="form-control" required id="age'.$item['user_id'].'" placeholder="Nhập tuổi" value="'.$item['user_age'].'">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="address'.$item['user_id'].'">Địa chỉ</label>
                                                        <input type="text" class="form-control" required id="address'.$item['user_id'].'" placeholder="Nhập địa chỉ" value="'.$item['user_address'].'">
                                                    </div>
                                                </div>
                                            </div>
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

<!-- Message Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p id="error" class="text-center fs-5" style="color: red"></p>
        </div>
        </div>
    </div>
</div>