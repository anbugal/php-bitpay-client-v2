<?php


namespace BitPay\Model\Invoice;


class MinerFeesItem
{
    protected $_satoshisPerByte;
    protected $_totalFee;

    public function __construct() {
    }

    public function getSatoshisPerByte() {
        return $this->_satoshisPerByte;
    }

    public function setSatoshisPerByte(float $satoshisPerByte) {
        $this->_satoshisPerByte = $satoshisPerByte;
    }

    public function getTotalFee() {
        return $this->_totalFee;
    }

    public function setTotalFee(float $totalFee) {
        $this->_totalFee = $totalFee;
    }
}