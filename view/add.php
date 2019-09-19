
<?php

if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <a href="index.php" ><button  type="submit" class="btn btn-primary">Hiển thị Danh Sách Dịch vụ</button></a>
            <h1>Nhập thông tin dịch vụ</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên dịch vụ</label>
                    <input type="text" class="form-control" name="tendichvu"  placeholder="Nhập tên" required>
                </div>
                <div class="form-group">
                    <label>Diện Tích dich vu</label>
                    <input type="text" class="form-control" name="dientichdichvu" placeholder="Nhập mail" required>
                    <span style="color: red;"><?php if (isset($erro['dientichdichvu'])) {echo $erro['dientichdichvu'];} ?></span>

                </div>

                <div class="form-group">
                    <label>so nguoi toi da</label>
                    <input type="text" class="form-control" name="songuoitoida" placeholder="Nhập địa chỉ" required>
                    <span style="color: red;"><?php if (isset($erro['songuoitoida'])) {echo $erro['songuoitoida'];} ?></span>
                </div>
                <div class="form-group">
                    <label>gia thue</label>
                    <input type="text" class="form-control" name="giathue" placeholder="gia thue" required>
                    <span style="color: red;"><?php if (isset($erro['giathue'])) {echo $erro['giathue'];} ?></span>
                </div>
                <div class="form-group">
                    <label>Kiểu Thuê</label>
                    <input type="text" class="form-control" name="kieuthue" placeholder="Kiểu thuê" required>
                </div>
                <div class="form-group">
                    <label>loaidv_id </label>
                    <select name="loaidichvu">
                        <?php
                       foreach ($goiloaidv as $loaidichvu):?>
                         <option value="<?php echo $loaidichvu->getTenloaidv()?>"> <?php echo $loaidichvu->getSoloaidv()?></option>
                       <?php endforeach; ?>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>