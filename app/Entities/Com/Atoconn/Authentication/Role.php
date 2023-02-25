<?php
namespace App\Entities\Com\Atoconn\Authentication;

class Role {
    
    private $id;
    private $roleid;
    private $rolename;
    private $roledescription;
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
    public function getRoleid()
    {
        return $this->roleid;
    }

    /**
     * @return mixed
     */
    public function getRolename()
    {
        return $this->rolename;
    }

    /**
     * @return mixed
     */
    public function getRoledescription()
    {
        return $this->roledescription;
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
     * @param mixed $roleid
     */
    public function setRoleid($roleid)
    {
        $this->roleid = $roleid;
    }

    /**
     * @param mixed $rolename
     */
    public function setRolename($rolename)
    {
        $this->rolename = $rolename;
    }

    /**
     * @param mixed $roledescription
     */
    public function setRoledescription($roledescription)
    {
        $this->roledescription = $roledescription;
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