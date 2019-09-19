
<?php

if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <a href="index.php" ><button  type="submit" class="btn btn-primary">Hiển thị Danh Sách khach hang</button></a>
            <h1>Nhập thông tin khach hang</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên khach hang</label>
                    <input type="text" class="form-control" name="tenkhachhang"  placeholder="Nhập tên" required>
                </div>
                <div class="form-group">
                    <label>ngaysinh</label>
                    <input type="date" class="form-control" name="ngaysinh" placeholder="" required>

                </div>

                <div class="form-group">
                    <label>gioi tinh</label>
                    <input type="text" class="form-control" name="gioitinh" placeholder="Nhập địa chỉ" required>
                </div>
                <div class="form-group">
                    <label>cmnn</label>
                    <input type="text" class="form-control" name="cmnn" placeholder="gia thue" required>
                </div>
                <div class="form-group">
                    <label>sdt</label>
                    <input type="text" class="form-control" name="sodienthoai" placeholder="Kiểu thuê" required>
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="text" class="form-control" name="email" placeholder="Kiểu thuê" required>
                    <span style="color: red;"><?php if (isset($emailErr["email"])) {echo $emailErr["email"];} ?></span>
                </div>
                <div class="form-group">
                    <label>loaikhach</label>
                    <input type="text" class="form-control" name="loaikhach" placeholder="Kiểu thuê" required>
                </div>
                <div class="form-group">
                    <label>dia chi</label>
                    <input type="text" class="form-control" name="diachi" placeholder="Kiểu thuê" required>
                </div>
                <div class="form-group">
                    <label>idnhanvien</label>
                    <input type="text" class="form-control" name="idnhanvien" placeholder="Kiểu thuê" required>
                </div>



                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
