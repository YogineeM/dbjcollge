<?php
namespace App\Entities\Com\Atoconn\Finance;

class Voucher
{
    private $id;
    private $voucherid;
    private $date;
    private $accountNo;
    private $accountType;
    private $branch_id;
    private $amount;
    private $payment_mode;
    private $transaction_type;
    private $naration;
    private $cheque_no;
    private $cheque_date;
    private $issueing_bank;
    private $ref_id1;
    private $ref_id2;
    private $status;
    private $createdBy;
    private $createdDate;
    private $approveDate;
    private $approveBy;
    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param mixed $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getVoucherid()
    {
        return $this->voucherid;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * @return mixed
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @return mixed
     */
    public function getBranch_id()
    {
        return $this->branch_id;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getPayment_mode()
    {
        return $this->payment_mode;
    }

    /**
     * @return mixed
     */
    public function getTransaction_type()
    {
        return $this->transaction_type;
    }

    /**
     * @return mixed
     */
    public function getNaration()
    {
        return $this->naration;
    }

    /**
     * @return mixed
     */
    public function getCheque_no()
    {
        return $this->cheque_no;
    }

    /**
     * @return mixed
     */
    public function getCheque_date()
    {
        return $this->cheque_date;
    }

    /**
     * @return mixed
     */
    public function getIssueing_bank()
    {
        return $this->issueing_bank;
    }

    /**
     * @return mixed
     */
    public function getRef_id1()
    {
        return $this->ref_id1;
    }

    /**
     * @return mixed
     */
    public function getRef_id2()
    {
        return $this->ref_id2;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @return mixed
     */
    public function getApproveDate()
    {
        return $this->approveDate;
    }

    /**
     * @return mixed
     */
    public function getApproveBy()
    {
        return $this->approveBy;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $voucherid
     */
    public function setVoucherid($voucherid)
    {
        $this->voucherid = $voucherid;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param mixed $accountNo
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
    }

    /**
     * @param mixed $accountType
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
    }

    /**
     * @param mixed $branch_id
     */
    public function setBranch_id($branch_id)
    {
        $this->branch_id = $branch_id;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param mixed $payment_mode
     */
    public function setPayment_mode($payment_mode)
    {
        $this->payment_mode = $payment_mode;
    }

    /**
     * @param mixed $transaction_type
     */
    public function setTransaction_type($transaction_type)
    {
        $this->transaction_type = $transaction_type;
    }

    /**
     * @param mixed $naration
     */
    public function setNaration($naration)
    {
        $this->naration = $naration;
    }

    /**
     * @param mixed $cheque_no
     */
    public function setCheque_no($cheque_no)
    {
        $this->cheque_no = $cheque_no;
    }

    /**
     * @param mixed $cheque_date
     */
    public function setCheque_date($cheque_date)
    {
        $this->cheque_date = $cheque_date;
    }

    /**
     * @param mixed $issueing_bank
     */
    public function setIssueing_bank($issueing_bank)
    {
        $this->issueing_bank = $issueing_bank;
    }

    /**
     * @param mixed $ref_id1
     */
    public function setRef_id1($ref_id1)
    {
        $this->ref_id1 = $ref_id1;
    }

    /**
     * @param mixed $ref_id2
     */
    public function setRef_id2($ref_id2)
    {
        $this->ref_id2 = $ref_id2;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @param mixed $approveDate
     */
    public function setApproveDate($approveDate)
    {
        $this->approveDate = $approveDate;
    }

    /**
     * @param mixed $approveBy
     */
    public function setApproveBy($approveBy)
    {
        $this->approveBy = $approveBy;
    }

    
    
    
}

