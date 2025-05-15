<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SanPham
 *
 * @author DELL
 */
class SanPham {

    //put your code here
    private $maSP;
    private $tenSP;
    private $giaSP;
    private $moTaSP;
    private $soLuongSP;
    private $imgSP;

    public function __construct($ma, $ten, $gia, $sl, $mota, $img) {
        $this->maSP = $ma;
        $this->tenSP = $ten;
        $this->giaSP = $gia;
        $this->soLuongSP = $sl;
        $this->maSP = $mota;
        $this->imgSP = $img;
    }

    public function __destruct() {
        $this->maSP = "";
        $this->tenSP = "";
        $this->giaSP = "";
        $this->soLuongSP = "";
        $this->maSP = "";
        $this->imgSP = "";
    }

    public function getMaSP() {
        return $this->maSP;
    }

    public function getTenSP() {
        return $this->tenSP;
    }

    public function getGiaSP() {
        return $this->giaSP;
    }

    public function getMoTaSP() {
        return $this->moTaSP;
    }

    public function setMaSP($maSP) {
        $this->maSP = $maSP;
    }

    public function setTenSP($tenSP) {
        $this->tenSP = $tenSP;
    }

    public function setGiaSP($giaSP) {
        $this->giaSP = $giaSP;
    }

    public function setMoTaSP($moTaSP) {
        $this->moTaSP = $moTaSP;
    }

    public function getSoLuongSP() {
        return $this->soLuongSP;
    }

    public function setSoLuongSP($soLuongSP) {
        $this->soLuongSP = $soLuongSP;
    }

    public function getImgSP() {
        return $this->imgSP;
    }

    public function setImgSP($imgSP) {
        $this->imgSP = $imgSP;
    }

}
