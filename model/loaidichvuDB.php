<?php


namespace model;


class loaidichvuDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM loaidichvu ";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $loaidichvus = [];
        foreach ($result as $row) {
            $loaidichvu = new loaidichvu($row['tenloaidv'], $row['soloaidv']);

            $loaidichvu->loaidv_id =( $row['loaidv_id']) ;
            $loaidichvus[] = $loaidichvu;
        }
        return $loaidichvus;
    }

}