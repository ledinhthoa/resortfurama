<?php


namespace model;


class customerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($Customer)
    {
        $sql = "INSERT INTO khach_hang( ho_ten_kh, ngay_sinh, gioi_tinh, cmnn, so_dt, email, loai_khach, dia_chi, id_nhanvien)
                    VALUES (?,?,?,?,?,?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(1, $Customer->gethotenkhachhang());
        $statement->bindValue(2, $Customer->getNgaysinh());
        $statement->bindValue(3, $Customer->getgoitinh());
        $statement->bindValue(4, $Customer->getcmnn());
        $statement->bindValue(5, $Customer->getsdt());
        $statement->bindValue(6, $Customer->getemail());
        $statement->bindValue(7, $Customer->getloaikhach());
        $statement->bindValue(8, $Customer->getdiachi());
        $statement->bindValue(9, $Customer->getidnhanvien());

        return $statement->execute();
    }
    public function getListcustomer()
    {
        $sql = "SELECT * FROM khach_hang";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function get($khachhang_id)
    {
        $sql = "SELECT * FROM khach_hang WHERE id_khach_hang= ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $khachhang_id);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }
    public function deletecustomer($id)
    {
        $sql = "DELETE FROM khach_hang WHERE id_khach_hang = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }
    public function update($id_khachhang, $custome)
    {
        $sql = "UPDATE khach_hang SET  ho_ten_kh=?,ngay_sinh=?,
                    gioi_tinh=?,cmnn=?,so_dt=?,email=?,loai_khach=?,
                dia_chi=?,id_nhanvien=? WHERE id_khach_hang=?";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(1, $custome->gethotenkhachhang());
        $statement->bindValue(2, $custome->getngaysinh());
        $statement->bindValue(3, $custome->getgoitinh());
        $statement->bindValue(4, $custome->getcmnn());
        $statement->bindValue(5, $custome->getsdt());
        $statement->bindValue(6, $custome->getemail());
        $statement->bindValue(7, $custome->getloaikhach());
        $statement->bindValue(8, $custome->getdiachi());
        $statement->bindValue(9, $custome->getIdnhanvien());
        $statement->bindValue(10,$id_khachhang);

        return $statement->execute();
    }
}