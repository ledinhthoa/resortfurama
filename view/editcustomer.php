<h2>Cập nhật thông tin khach hang</h2>
<form method="post" action="./index.php?page=editcustomer">
    <input type="hidden" name="id" value="<?php echo $customer['id_khach_hang']; ?>"/>
        <div class="form-group">
            <label>Tên khach hang</label>
            <input type="text" name="tenkhachhang" value="<?php echo $customer['ho_ten_kh']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>ngay sinh</label>
        <textarea name="ngaysinh" class="form-control"><?php echo $customer['ngay_sinh']; ?></textarea>
    </div>
    <div class="form-group">
        <label>gioi tinh</label>
        <textarea name="gioitinh" class="form-control"><?php echo $customer['gioi_tinh']; ?></textarea>
    </div>
    <div class="form-group">
        <label>cmnn</label>
        <textarea name="cmnn" class="form-control"><?php echo $customer['cmnn']; ?></textarea>
    </div>
    <div class="form-group">
        <label>so dien thoai</label>
        <textarea name="sdt" class="form-control"><?php echo $customer['so_dt']; ?></textarea>
    </div>
    <div class="form-group">
        <label>email</label>
        <textarea name="email" class="form-control"><?php echo $customer['email']; ?></textarea>
    </div>
    <div class="form-group">
        <label>loai khach</label>
        <textarea name="loaikhach" class="form-control"><?php echo $customer['loai_khach']; ?></textarea>
    </div>
    <div class="form-group">
        <label>dia chi</label>
        <textarea name="diachi" class="form-control"><?php echo $customer['dia_chi']; ?></textarea>
    </div>
    <div class="form-group">
        <label>id_nhanvien</label>
        <textarea name="id_nhanvien" class="form-control"><?php echo $customer['id_nhanvien']; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>
