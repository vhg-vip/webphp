<!-- <script src="../js/admin.js"></script> -->
<!-- <link rel="stylesheet" href="../css/admin.css"> -->


<!-- Add Modal -->
<h2 class="text-center mt-3">Lỗi vi phạm</h2>
<div class="text-right py-3 pr-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Thêm</button>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="text-left">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="bienso">Biển số xe</label>
                            <input type="text" class="form-control" required id="bienso" placeholder="Nhập biển số xe" value="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="loi">Lỗi vi phạm</label>
                            <input type="text" class="form-control" required id="loi" placeholder="Nhập lỗi vi phạm" value="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="điaiem">Địa điểm</label>
                            <input type="text" class="form-control" required id="diadiem" placeholder="Nhập địa điểm" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="time">Thời gian</label>
                            <input type="date" class="form-control" required id="time" placeholder="Nhập thời gian" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="hinhthuc">Hình thức phạt</label>
                            <select class="form-control" required id="hinhthuc">
                                <option value="Phạt tiền">Phạt tiền</option>
                                <option value="Phạt cảnh cáo">Phạt cảnh cáo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mucphat">Mức phạt</label>
                            <input type="number" class="form-control" required id="mucphat" placeholder="Nhập mức phạt" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Trạng thái</label>
                            <select class="form-control" required id="status">
                                <option value="Đã thanh toán">Đã thanh toán</option>
                                <option value="Chưa thanh toán">Chưa thanh toán</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary text-end" onclick="addLoiViPham()">Thêm</button>
                <button type="button" class="btn btn-danger text-end" data-dismiss="modal">Hủy</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>


<table class="table">
    <thead class="thead-light">
        <tr>
            <th style="width: 3%;">#</th>
            <th style="width: 12%;">Biển số xe</th>
            <th style="width: 15%;">Lỗi vi phạm</th>
            <th style="width: 15%;">Địa điểm</th>
            <th style="width: 10%;">Thời gian</th>
            <th style="width: 10%;">Hình thức phạt</th>
            <th style="width: 10%">Mức phạt</th>
            <th style="width: 10%">Trạng thái</th>
            <th style="width: 20%;">Hành động</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM tbl_loivipham";
        $users = executeResult($sql);

        if($users){
            foreach($users as $key=>$item){
                echo 
                '<tr>'
                    .'<td>'.$key.'</td>'
                    .'<td>'.$item['biensoxe'].'</td>'
                    .'<td>'.$item['loivipham'].'</td>'
                    .'<td>'.$item['diadiem'].'</td>'
                    .'<td>'.$item['ngaygio'].'</td>'
                    .'<td>'.$item['hinhthuc'].'</td>'
                    .'<td>'.$item['mucphat'].'</td>'
                    .'<td>'.$item['trangthai'].'</td>'
                    .'<td class="text-center">
                        <button class="btn btn-warning edit'.$item['id'].'" data-toggle="modal" data-target="#editViolationModal'.$item['id'].'">Sửa</button>
                        <div class="modal fade" id="editViolationModal'.$item['id'].'" tabindex="-1" aria-hidden="true">
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
                                                        <label>Mã lỗi</label>
                                                        <input type="text" class="form-control" disabled value="'.$item['id'].'">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="bienso'.$item['id'].'">Biển số xe</label>
                                                        <input type="text" class="form-control" required id="bienso'.$item['id'].'" placeholder="Nhập biển số xe" value="'.$item['biensoxe'].'">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="loi'.$item['id'].'">Lỗi vi phạm</label>
                                                        <input type="text" class="form-control" required id="loi'.$item['id'].'" placeholder="Nhập lỗi vi phạm" value="'.$item['loivipham'].'">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="điaiem'.$item['id'].'">Địa điểm</label>
                                                        <input type="text" class="form-control" required id="diadiem'.$item['id'].'" placeholder="Nhập địa điểm" value="'.$item['diadiem'].'">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="time'.$item['id'].'">Thời gian</label>
                                                        <input type="date" class="form-control" required id="time'.$item['id'].'" placeholder="Nhập thời gian" value="'.$item['ngaygio'].'">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="hinhthuc'.$item['id'].'">Hình thức phạt</label>
                                                        <select class="form-control" required id="hinhthuc'.$item['id'].'">';
                                                        if($item['hinhthuc'] === 'Phạt tiền'){
                                                            echo '<option selected value="Phạt tiền">Phạt tiền</option>
                                                            <option value="Phạt cảnh cáo">Phạt cảnh cáo</option>';
                                                        }
                                                        else{
                                                            echo '<option value="Phạt tiền">Phạt tiền</option>
                                                            <option selected value="Phạt cảnh cáo">Phạt cảnh cáo</option>';
                                                        }
                                                        echo '</select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="mucphat'.$item['id'].'">Mức phạt</label>
                                                        <input type="number" class="form-control" required id="mucphat'.$item['id'].'" placeholder="Nhập mức phạt" value="'.$item['mucphat'].'">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="status'.$item['id'].'">Trạng thái</label>
                                                        <select class="form-control" required id="status'.$item['id'].'">';
                                                        if($item['trangthai'] === 'Đã thanh toán'){
                                                            echo '<option selected value="Đã thanh toán">Đã thanh toán</option>
                                                            <option value="Chưa thanh toán">Chưa thanh toán</option>';
                                                        }
                                                        else{
                                                            echo '<option value="Đã thanh toán">Đã thanh toán</option>
                                                            <option selected value="Chưa thanh toán">Chưa thanh toán</option>';
                                                        }
                                                        echo '</select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success text-end" onclick="editLoiViPham('.$item['id'].')">Cập nhật</button>
                                            <button type="button" class="btn btn-danger text-end" data-dismiss="modal">Hủy</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteViolationModal'.$item['id'].'">Xóa</button>
                        <div class="modal fade" id="deleteViolationModal'.$item['id'].'" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p id="msg" class="text-center fs-5">Bạn có chắc muốn xóa không?</p>
                                        <button type="button" class="btn btn-danger text-end" onclick="deleteLoiViPham('.$item['id'].')">Xóa</button>
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


<script>
    $('form').on('submit', function(event) {
        event.preventDefault();
    }); 
</script>