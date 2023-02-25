<?php
namespace App\Entities\Com\Atoconn\communication;

class Contact
{

    public function __construct()
    {}
    
    private $id;
    private $entity_id;
    private $client_id;
    private $country_code;
    private $std;
    private $phone_number;
    private $type;
    private $entity_type;
    private $is_primary;
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
    public function getEntity_id()
    {
        return $this->entity_id;
    }
    
    /**
     * @return mixed
     */
    public function getClient_id()
    {
        return $this->client_id;
    }
    
    /**
     * @return mixed
     */
    public function getCountry_code()
    {
        return $this->country_code;
    }
    
    /**
     * @return mixed
     */
    public function getStd()
    {
        return $this->std;
    }
    
    /**
     * @return mixed
     */
    public function getPhone_number()
    {
        return $this->phone_number;
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
     * @param mixed $client_id
     */
    public function setClient_id($client_id)
    {
        $this->client_id = $client_id;
    }
    
    /**
     * @param mixed $country_code
     */
    public function setCountry_code($country_code)
    {
        $this->country_code = $country_code;
    }
    
    /**
     * @param mixed $std
     */
    public function setStd($std)
    {
        $this->std = $std;
    }
    
    /**
     * @param mixed $phone_number
     */
    public function setPhone_number($phone_number)
    {
        $this->phone_number = $phone_number;
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

