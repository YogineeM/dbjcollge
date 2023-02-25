<?php
namespace App\Entities\Com\Atoconn\Candidates;

class Candidate extends Person
{

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
    public function getCandidate_id()
    {
        return $this->candidate_id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return mixed
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * @return mixed
     */
    public function getPersonid()
    {
        return $this->personid;
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
    public function getEntity_type()
    {
        return $this->entity_type;
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
     * @param mixed $candidate_id
     */
    public function setCandidate_id($candidate_id)
    {
        $this->candidate_id = $candidate_id;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @param mixed $permission
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
    }

    /**
     * @param mixed $personid
     */
    public function setPersonid($personid)
    {
        $this->personid = $personid;
    }

    /**
     * @param mixed $entity_id
     */
    public function setEntity_id($entity_id)
    {
        $this->entity_id = $entity_id;
    }

    /**
     * @param mixed $entity_type
     */
    public function setEntity_type($entity_type)
    {
        $this->entity_type = $entity_type;
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

    public function __construct()
    {}
    
    private $id;
    private $candidate_id;
    private $user;
    private $role;
    private $permission;
    private $personid;
    private $entity_id;
    private $entity_type;
    private $createdby;
    private $createddate;
    private $updatedby;
    private $updateddate;
    
    
    
}

