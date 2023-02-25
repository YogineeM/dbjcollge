<?php
namespace App\Entities\Com\Atoconn\Authentication;

class Module {
    
    private $id;
    private $mid;
    private $mname;
    private $description;
    private $createdby;
    private $createddate;
    private $updatedby;
    private $updateddate;
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
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * @return mixed
     */
    public function getMname()
    {
        return $this->mname;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * @return mixed
     */
    public function getCreateddate()
    {
        return $this->createddate;
    }

    /**
     * @return mixed
     */
    public function getUpdatedby()
    {
        return $this->updatedby;
    }

    /**
     * @return mixed
     */
    public function getUpdateddate()
    {
        return $this->updateddate;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $mid
     */
    public function setMid($mid)
    {
        $this->mid = $mid;
    }

    /**
     * @param mixed $mname
     */
    public function setMname($mname)
    {
        $this->mname = $mname;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $createdby
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;
    }

    /**
     * @param mixed $createddate
     */
    public function setCreateddate($createddate)
    {
        $this->createddate = $createddate;
    }

    /**
     * @param mixed $updatedby
     */
    public function setUpdatedby($updatedby)
    {
        $this->updatedby = $updatedby;
    }

    /**
     * @param mixed $updateddate
     */
    public function setUpdateddate($updateddate)
    {
        $this->updateddate = $updateddate;
    }

    
}