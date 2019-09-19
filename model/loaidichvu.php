<?php


namespace model;


class loaidichvu
{
   private $tenloaidv;
   private $soloaidv;

    /**
     * @return mixed
     */
    public function getTenloaidv()
    {
        return $this->tenloaidv;
    }

    /**
     * @param mixed $tenloaidv
     */
    public function setTenloaidv($tenloaidv): void
    {
        $this->tenloaidv = $tenloaidv;
    }

    /**
     * @return mixed
     */
    public function getSoloaidv()
    {
        return $this->soloaidv;
    }

    /**
     * @param mixed $soloaidv
     */
    public function setSoloaidv($soloaidv): void
    {
        $this->soloaidv = $soloaidv;
    }

    public function __construct()
    {

    }
}