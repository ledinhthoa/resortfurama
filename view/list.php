<h2>Danh sách tất cả dịch vụ cho thuê</h2>
<a href="./index.php?page=add" ><button  type="submit" class="btn btn-primary">Thêm Dịch Vụ</button></a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên Dịch Vụ</th>
        <th>Diện Tích (m2)</th>
        <th>Số Người Tối Đa</th>
        <th>gia thue</th>
        <th>Kiểu Thuê</th>
        <th>loaidv_id</th>
        <th></th>
        <th></th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($servies as $key => $servie): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $servie['tendichvu'] ?></td>
        <td><?php echo $servie['dientichdichvu'] ?></td>
        <td><?php echo $servie['soluongnguoitoida'] ?></td>
        <td><?php echo $servie['giathue'] ?></td>
        <td><?php echo $servie['kieuthue'] ?></td>
        <td><?php echo $servie['loaidv_id'] ?></td>
        <td> <a href="index.php?page=delete&id=<?php echo $servie["dichvu_id"]; ?>" class="btn btn-danger">Delete</a></td>
        <td> <a href="#" class="btn btn-warning">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>

Tổng số dịch vụ hiện có: <?php echo $services_Count ?>