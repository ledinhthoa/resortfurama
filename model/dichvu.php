<?php

namespace model;

class dichvu
{
    public $dichvu_id;
    private $tendichvu;
    private $dientichdichvu;
    private $songuoitoida;
    private $giathue;
    private $kieuthue;
    private $loaidv_id;

    /**
     * @return mixed
     */
    public function getDichvuId()
    {
        return $this->dichvu_id;
    }

    /**
     * @param mixed $dichvu_id
     */
    public function setDichvuId($dichvu_id): void
    {
        $this->dichvu_id = $dichvu_id;
    }

    /**
     * @return mixed
     */
    public function getTendichvu()
    {
        return $this->tendichvu;
    }

    /**
     * @param mixed $tendichvu
     */
    public function setTendichvu($tendichvu): void
    {
        $this->tendichvu = $tendichvu;
    }

    /**
     * @return mixed
     */
    public function getDientichdichvu()
    {
        return $this->dientichdichvu;
    }

    /**
     * @param mixed $dientichdichvu
     */
    public function setDientichdichvu($dientichdichvu): void
    {
        $this->dientichdichvu = $dientichdichvu;
    }

    /**
     * @return mixed
     */
    public function getSonguoitoida()
    {
        return $this->songuoitoida;
    }

    /**
     * @param mixed $songuoitoida
     */
    public function setSonguoitoida($songuoitoida): void
    {
        $this->songuoitoida = $songuoitoida;
    }

    /**
     * @return mixed
     */

    public function getGiathue()
    {
        return $this->giathue;
    }

    /**
     * @param mixed $giathue
     */
    public function setGiathue($giathue): void
    {
        $this->giathue = $giathue;
    }

    /**
     * @return mixed
     */
    public function getKieuthue()
    {
        return $this->kieuthue;
    }

    /**
     * @param mixed $kieuthue
     */
    public function setKieuthue($kieuthue): void
    {
        $this->kieuthue = $kieuthue;
    }

    /**
     * @return mixed
     */
    public function getLoaidvId()
    {
        return $this->loaidv_id;
    }

    /**
     * @param mixed $loaidv_id
     */
    public function setLoaidvId($loaidv_id): void
    {
        $this->loaidv_id = $loaidv_id;
    }


    public function __construct()
    {

    }




}

