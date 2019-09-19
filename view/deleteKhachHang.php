<h1>Bạn chắc chắn muốn xóa Dịch Vụ này?</h1>

<h3><?php echo $customer['ho_ten_kh'] ;?></h3>

<form action="index.php?page=deletekhachhang" method="post">
    <input type="hidden" name="id" value="<?php echo $customer['id_khach_hang']; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php">Cancel</a>
    </div>
</form>
