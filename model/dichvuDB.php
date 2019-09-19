<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 01/11/2018
 * Time: 22:53
 */

namespace model;
include_once  ("loaidichvu.php");
class dichvuDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($Services)
    {

        $sql = "INSERT INTO dichvu(tendichvu,dientichdichvu,soluongnguoitoida,giathue,kieuthue,loaidv_id) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(1, $Services->gettendichvu());
        $statement->bindValue(2, $Services->getdientichdichvu());
        $statement->bindValue(3, $Services->getsonguoitoida());
        $statement->bindValue(4, $Services->getgiathue());
        $statement->bindValue(5, $Services->getkieuthue());
        $statement->bindValue(6, $Services->getLoaidvId());

        return $statement->execute();
    }
    public function getloaidv(){
        $sql = "SELECT * FROM loaidichvu ";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $loaidichvus = [];
        foreach ($result as $row) {
            $loaidichvu = new loaidichvu();

            $loaidichvu->setSoloaidv($row['soloaidv']);
            $loaidichvu->setTenloaidv($row['tenloaidv']);
            $loaidichvu->loaidv_id =( $row['loaidv_id']) ;
            $loaidichvus[] = $loaidichvu;
        }
        return $loaidichvus;
    }

    public function getList()
    {
        $sql = "SELECT * FROM dichvu";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function get($dichvu_id)
    {
        $sql = "SELECT * FROM dichvu WHERE dichvu_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $dichvu_id);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }
    public function delete($dichvu_id)
    {
        $sql = "DELETE FROM dichvu WHERE dichvu_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $dichvu_id);
        return $statement->execute();
    }




}