<script src="../js/adminnnn.js"></script>

<h2 class="text-center mt-3 mb-4">Phản ánh</h2>
<div class="table-responsive">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th style="width: 5%;">#</th>
                <th style="width: 10%; min-width: 150px;">Họ và tên</th>
                <th style="width: 10%;">Email</th>
                <th style="width: 10%;">SĐT</th>
                <th style="width: 20%; min-width: 200px;">Nội dung</th>
                <th style="width: 10%; min-width: 200px;">Trạng thái</th>
                <th style="width: 10%; min-width: 200px;">Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // require('../../db/dbhelper.php');

            $sql = "SELECT * FROM tbl_support";
            $users = executeResult($sql);

            if($users){
                foreach($users as $key=>$item){
                    echo 
                    '<tr>'
                        .'<td>'.$key.'</td>'
                        .'<td>'.$item['support_name'].'</td>'
                        .'<td>'.$item['support_email'].'</td>'
                        .'<td>'.$item['support_phonenumber'].'</td>'
                        .'<td>'.$item['support_content'].'</td>'
                        .'<td>'.$item['support_status'].'</td>'
                        .'<td class="text-center"> 
                            <button class="btn btn-warning edit editSupportModal'.$item['support_id'].'" data-toggle="modal" data-target="#editSupportModal'.$item['support_id'].'">Sửa</button>
                            <div class="modal fade" id="editSupportModal'.$item['support_id'].'" tabindex="-1" aria-hidden="true">
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
                                                            <label>ID</label>
                                                            <input type="text" class="form-control" disabled value="'.$item['support_id'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="support-name'.$item['support_name'].'">Họ và tên</label>
                                                            <input type="text" class="form-control" required id="support-name'.$item['support_id'].'" placeholder="Nhập họ tên" value="'.$item['support_name'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="support-email'.$item['support_id'].'">Email</label>
                                                            <input type="email" class="form-control" required id="support-email'.$item['support_id'].'" placeholder="Nhập email" value="'.$item['support_email'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="support-phone'.$item['support_id'].'">Số điện thoại</label>
                                                            <input type="text" class="form-control" required id="support-phone'.$item['support_id'].'" placeholder="Nhập số điện thoại" value="'.$item['support_phonenumber'].'">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="support-status'.$item['support_id'].'">Trạng thái</label>
                                                            <select class="form-control" required id="support-status'.$item['support_id'].'">';
                                                            if($item['support_status'] === 'Đã phản hồi'){
                                                                echo '<option selected value="Đã phản hồi">Đã phản hồi</option>
                                                                <option value="Chưa phản hồi">Chưa phản hồi</option>';
                                                            }
                                                            else{
                                                                echo '<option value="Đã phản hồi">Đã phản hồi</option>
                                                                <option selected value="Chưa phản hồi">Chưa phản hồi</option>';
                                                            }
                                                            echo '</select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="support-content'.$item['support_id'].'">Nội dung</label>
                                                            <textarea class="form-control" id="support-content'.$item['support_id'].'" rows="6" placeholder="Nhập nội dung" value="">'.$item['support_content'].'</textarea>
                                                        </div>
                                                        <p class="error" class="text-center fs-5" style="color: red"></p>
                                                    </div>
                                                </div>
                                                
                                                <button type="button" class="btn btn-success text-end" onclick="editSupport('.$item['support_id'].')">Cập nhật</button>
                                                <button type="button" class="btn btn-danger text-end" data-dismiss="modal">Hủy</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteSupportModal'.$item['support_id'].'")">Xóa</button>
                            <div class="modal fade" id="deleteSupportModal'.$item['support_id'].'" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p id="msg" class="text-center fs-5">Bạn có chắc muốn xóa không?</p>
                                            <button type="button" class="btn btn-danger text-end" onclick="deleteSupport('.$item['support_id'].')">Xóa</button>
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


