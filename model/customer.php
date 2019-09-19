<?php


namespace model;


class customer
{
    private $hotenkhachhang;
    private $ngaysinh;
    private $goitinh;
    private $cmnn;
    private $sdt;
    private $email;
    private $loaikhach;
    private $diachi;
    private $idnhanvien;

    /**
     * @return mixed
     */
    public function getHotenkhachhang()
    {
        return $this->hotenkhachhang;
    }

    /**
     * @param mixed $hotenkhachhang
     */
    public function setHotenkhachhang($hotenkhachhang): void
    {
        $this->hotenkhachhang = $hotenkhachhang;
    }

    /**
     * @return mixed
     */
    public function getNgaysinh()
    {
        return $this->ngaysinh;
    }

    /**
     * @param mixed $ngaysinh
     */
    public function setNgaysinh($ngaysinh): void
    {
        $this->ngaysinh = $ngaysinh;
    }

    /**
     * @return mixed
     */
    public function getGoitinh()
    {
        return $this->goitinh;
    }

    /**
     * @param mixed $goitinh
     */
    public function setGoitinh($goitinh): void
    {
        $this->goitinh = $goitinh;
    }

    /**
     * @return mixed
     */
    public function getCmnn()
    {
        return $this->cmnn;
    }

    /**
     * @param mixed $cmnn
     */
    public function setCmnn($cmnn): void
    {
        $this->cmnn = $cmnn;
    }

    /**
     * @return mixed
     */
    public function getSdt()
    {
        return $this->sdt;
    }

    /**
     * @param mixed $sdt
     */
    public function setSdt($sdt): void
    {
        $this->sdt = $sdt;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getLoaikhach()
    {
        return $this->loaikhach;
    }

    /**
     * @param mixed $loaikhach
     */
    public function setLoaikhach($loaikhach): void
    {
        $this->loaikhach = $loaikhach;
    }

    /**
     * @return mixed
     */
    public function getDiachi()
    {
        return $this->diachi;
    }

    /**
     * @param mixed $diachi
     */
    public function setDiachi($diachi): void
    {
        $this->diachi = $diachi;
    }

    /**
     * @return mixed
     */
    public function getIdnhanvien()
    {
        return $this->idnhanvien;
    }

    /**
     * @param mixed $idnhanvien
     */
    public function setIdnhanvien($idnhanvien): void
    {
        $this->idnhanvien = $idnhanvien;
    }
    public function __construct()
    {
    }

}