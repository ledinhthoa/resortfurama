<h2>Danh sách tất cả khach hang cho thuê</h2>
<a href="./index.php?page=addCustomer" ><button  type="submit" class="btn btn-primary">Thêm khach hang</button></a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên khach hang</th>
        <th>ngay sinh</th>
        <th>goi tinh</th>
        <th>cmnn</th>
        <th>sdt</th>
        <th>email</th>
        <th>loai khach</th>
        <th>dia chi</th>
        <th>idnhanvien</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($customer as $key => $custome): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $custome['ho_ten_kh'] ?></td>
        <td><?php echo $custome['ngay_sinh'] ?></td>
        <td><?php echo $custome['gioi_tinh'] ?></td>
        <td><?php echo $custome['cmnn'] ?></td>
        <td><?php echo $custome['so_dt'] ?></td>
        <td><?php echo $custome['email'] ?></td>
        <td><?php echo $custome['loai_khach'] ?></td>
        <td><?php echo $custome['dia_chi'] ?></td>
        <td><?php echo $custome['id_nhanvien'] ?></td>
        <td> <a href="index.php?page=deletekhachhang&id=<?php echo $custome["id_khach_hang"]; ?>" class="btn btn-danger">Delete</a></td>
        <td> <a href="index.php?page=editcustomer&id=<?php echo $custome["id_khach_hang"]; ?>" class="btn btn-warning">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>

Tổng số khach hang  hiện có:<?php echo $customer_Count ?>
