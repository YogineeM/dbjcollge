<?php
namespace App\Entities\Com\Atoconn\Candidates;

class CandidateDetail
{

    public function __construct()
    {}
    
    private $id;
    private $candidate_id;
    private $personid;
    private $pan;
    private $adhar;
    private $votterid;
    private $votting_ward;
    private $gst;
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
    public function getPan()
    {
        return $this->pan;
    }
    
    /**
     * @return mixed
     */
    public function getAdhar()
    {
        return $this->adhar;
    }
    
    /**
     * @return mixed
     */
    public function getVotterid()
    {
        return $this->votterid;
    }
    
    /**
     * @return mixed
     */
    public function getVotting_ward()
    {
        return $this->votting_ward;
    }
    
    /**
     * @return mixed
     */
    public function getGst()
    {
        return $this->gst;
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
     * @param mixed $pan
     */
    public function setPan($pan)
    {
        $this->pan = $pan;
    }
    
    /**
     * @param mixed $adhar
     */
    public function setAdhar($adhar)
    {
        $this->adhar = $adhar;
    }
    
    /**
     * @param mixed $votterid
     */
    public function setVotterid($votterid)
    {
        $this->votterid = $votterid;
    }
    
    /**
     * @param mixed $votting_ward
     */
    public function setVotting_ward($votting_ward)
    {
        $this->votting_ward = $votting_ward;
    }
    
    /**
     * @param mixed $gst
     */
    public function setGst($gst)
    {
        $this->gst = $gst;
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

