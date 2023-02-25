<?php
namespace App\Models\Com\Atoconn\Candidates;

interface ProfileDao
{
    
    public function createCandidateDetails($details,$conn);
    
    public function createCandidateNationality($nation,$conn);
    
    public function createCandidatePerson($person,$conn);
    
    public function createCandidate($candidate);
    
    public function getRowCount($tablename, $con);
}

