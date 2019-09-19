<?php


namespace controller;

use function Couchbase\defaultDecoder;
use model\customerDB;
use Model\DBConnection;
use model\customer;


class CustomerController
{
    public $customerDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=quanlifurama", "root", "");
        $this->customerDB= new customerDB($connection->connect());
    }

    public function addCustomer()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            include 'view/addCustomer.php';
        }
        else {
            include 'userException.php';
            if (empty($emailErr)){
            $customer=new customer();
            $customer->setHotenkhachhang($_POST['tenkhachhang']);
            $customer->setNgaysinh($_POST['ngaysinh']);
            $customer->setGoitinh($_POST['gioitinh']);
            $customer->setCmnn($_POST['cmnn']);
            $customer->setSdt($_POST['sodienthoai']);
            $customer->setEmail($_POST['email']);
            $customer->setLoaikhach($_POST['loaikhach']);
            $customer->setDiachi($_POST['diachi']);
            $customer->setIdnhanvien($_POST['idnhanvien']);
            $this->customerDB->create($customer);
            $message = 'Thêm khach hang  Thành Công';
            include 'view/addCustomer.php';
        }else{
                include 'view/addCustomer.php';
                include 'userException.php';
            }
        }
    }

    public function index()
    {
        $customer = $this->customerDB->getListcustomer();
        $customer_Count = count($this->customerDB->getListcustomer());
        include 'view/listCustomer.php';
    }
    public function deletekhachhang()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id_khachhang = $_GET['id'];
            $customer= $this->customerDB->get($id_khachhang);
            include 'view/deleteKhachHang.php';
        } else {
            $id_khachhang = $_POST['id'];
            $this->customerDB->deletecustomer($id_khachhang);
            header('Location: index.php');
        }
    }
    public function editcustomer() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id_khachhang = $_GET['id'];
            $customer = $this->customerDB->get($id_khachhang);
            include 'view/editcustomer.php';
        }
        else {
            $id_khachhang= $_POST['id'];
            $customer = new customer();
            $customer->setHotenkhachhang($_POST['tenkhachhang']);
            $customer->setNgaysinh($_POST['ngaysinh']) ;
            $customer->setGoitinh($_POST['gioitinh']) ;
            $customer->setSdt($_POST['sdt']) ;
            $customer->setCmnn($_POST['cmnn']) ;
            $customer->setEmail($_POST['email']) ;
            $customer->setLoaikhach($_POST['loaikhach']) ;
            $customer->setDiachi($_POST['diachi']) ;
            $customer->setIdnhanvien($_POST['id_nhanvien']) ;
            $this->customerDB->update($id_khachhang, $customer);
            header('Location: index.php');
        }
    }
}