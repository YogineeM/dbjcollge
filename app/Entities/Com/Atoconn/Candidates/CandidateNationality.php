<?php
namespace App\Entities\Com\Atoconn\Candidates;

class CandidateNationality
{

    public function __construct()
    {}
    
    private $id;
    private $candidate_id;
    private $personid;
    private $nationality;
    private $date;
    private $createdby;
    private $createddate;
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
    public function getPersonid()
    {
        return $this->personid;
    }
    
    /**
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
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
     * @param mixed $personid
     */
    public function setPersonid($personid)
    {
        $this->personid = $personid;
    }
    
    /**
     * @param mixed $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }
    
    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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
}

