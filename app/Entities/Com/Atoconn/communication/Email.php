<?php
namespace App\Entities\Com\Atoconn\communication;
/*
 * ATOCONN SYSTEM LABS PRIVATE LIMITED
 *
 * DEVELOPER: Vivek Pawar
 *
 * Date: 12/02/2019
 *
 * Description:Bean of email
 */
class Email{
    private $id;
    private $entity_id;
    private $type;
    private $entity_type;
    private $email;
    private $is_primary;
    private $createdby;
    private $createddate;
    private $updatedby;
    private $updateddate;
    /*
     * Client Management
     */
    private $clientid;
    
    /*
     * Config
     */
    private $tablename;
    private $module;
    
    
    
    /**
     * @return mixed
     */
    public function getClientid()
    {
        return $this->clientid;
    }
    
    /**
     * @return mixed
     */
    public function getTablename()
    {
        return $this->tablename;
    }
    
    /**
     * @return mixed
     */
    public function getModule()
    {
        return $this->module;
    }
    
    /**
     * @param mixed $clientid
     */
    public function setClientid($clientid)
    {
        $this->clientid = $clientid;
    }
    
    /**
     * @param mixed $tablename
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;
    }
    
    /**
     * @param mixed $module
     */
    public function setModule($module)
    {
        $this->module = $module;
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
    public function getEntity_id()
    {
        return $this->entity_id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getEntity_type()
    {
        return $this->entity_type;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getIs_primary()
    {
        return $this->is_primary;
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
     * @param mixed $entity_id
     */
    public function setEntity_id($entity_id)
    {
        $this->entity_id = $entity_id;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $entity_type
     */
    public function setEntity_type($entity_type)
    {
        $this->entity_type = $entity_type;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $is_primary
     */
    public function setIs_primary($is_primary)
    {
        $this->is_primary = $is_primary;
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
?>