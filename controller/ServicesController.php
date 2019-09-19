<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 01/11/2018
 * Time: 23:08
 */

namespace controller;

use model\loaidichvu;
use function Couchbase\defaultDecoder;
use model\dichvu;
use model\dichvuDB;
use model\DBConnection;

class ServicesController
{

    public $servicesDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=quanlifurama", "root", "");
        $this->servicesDB = new dichvuDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $goiloaidv=$this->servicesDB->getloaidv();
            include 'view/add.php';

        }
        else {
            include 'validate.php';
            if (empty($erro)){
            $services = new dichvu();
            $services->setTendichvu($_POST['tendichvu']);
            $services->setDientichdichvu($_POST['dientichdichvu']) ;
            $services->setSonguoitoida($_POST['songuoitoida']) ;
            $services->setGiathue($_POST['giathue']) ;
            $services->setKieuThue($_POST['kieuthue']) ;
            $services->setLoaidvId($_POST['loaidichvu']) ;
            $this->servicesDB->create($services);
            $message = 'Thêm Dịch Vụ Thành Công';
            include 'view/add.php';
        }
        else{
            include 'view/add.php';
            include 'validate.php';

        }}
    }

    public function index()
    {
        $servies = $this->servicesDB->getList();
        $services_Count = count($this->servicesDB->getList());
        include 'view/list.php';
    }
    public function delete()
{
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $dichvu_id = $_GET['id'];
        $services= $this->servicesDB->get($dichvu_id);
        include 'view/delete.php';
    } else {
        $dichvu_id = $_POST['id'];
        $this->servicesDB->delete($dichvu_id);
        header('Location: index.php');
    }
}

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $dichvu_id = $_GET['id'];
            $service = $this->servicesDB->get($dichvu_id);
            include 'view/edit.php';
        }
        else {
            $dichvu_id = $_POST['id'];
            $services = new Services();
            $services->setTendichvu($_POST['tendichvu']);
            $services->setDientichdichvu($_POST['dientichdichvu']) ;
            $services->setSonguoitoida($_POST['songuoitoida']) ;
            $services->setGiathue($_POST['giathue']) ;
            $services->setKieuThue($_POST['kieuthue']) ;
            $services->setLoaidvId($_POST['loaidv_id']) ;
            $this->servicesDB->update($dichvu_id, $services);
            header('Location: index.php');
        }
    }

}