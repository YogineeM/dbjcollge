<?php
namespace App\Models\Com\Atoconn\Candidates\Mysql;

use App\Models\Com\Atoconn\Candidates\ProfileDao;
use App\Models\Com\Atoconn\Database\Connection;
use App\Entities\Com\Atoconn\Candidates\CandidateDetail;
use App\Entities\Com\Atoconn\communication\Contact;
use App\Models\Com\Atoconn\Contact\Mysql\ContactDaoImpl;
use App\Entities\Com\Atoconn\location\Address;
use App\Models\Com\Atoconn\Location\Mysql\LocationDaoImpl;
use App\Entities\Com\Atoconn\communication\Email;
use App\Models\Com\Atoconn\Contact\Mysql\EmailDaoImpl;
use App\Entities\Com\Atoconn\Authentication\Users;
use App\Models\Com\Atoconn\Authentication\Mysql\AuthenticationDaoImpl;

class ProfileDaoImpl implements ProfileDao
{

    public function __construct()
    {}

    public function createCandidateNationality($nation, $conn)
    {

        // set parameters
        $candidate_id = $nation->getCandidate_id();
        $personid = $nation->getPersonid();
        $nationality = $nation->getNationality();
        $date = $nation->getDate();
        $createdby = $nation->getCreatedby();

        // create statement
        $statement = $conn->prepare("INSERT INTO `candidate_nationality`(`candidate_id`, `personid`, `nationality`, `date`, `createdby`, `createddate`) VALUES (?, ?, ?, ?, ?, now())");

        // bind paramet
        $statement->bind_param("iisss", $candidate_id, $personid, $nationality, $date, $createdby);

        // execute statement
        $statement->execute();

        // close statement and connection
        $statement->close();

        $result = array(
            "id" => 0,
            "status" => TRUE
        );

        return $result;
    }

    public function createCandidateDetails($details, $conn)
    {
        // set parameters
        $candidate_id = $details->getCandidate_id();
        $personid = $details->getPersonid();
        $pan = $details->getPan();
        $adhar = $details->getAdhar();
        $votterid = $details->getVotterid();
        $votting_ward = $details->getVotting_ward();
        $gst = $details->getGst();
        $createdby = $details->getCreatedby();

        // create statement
        $statement = $conn->prepare("INSERT INTO `candidate_details`(`candidate_id`, `personid`, `pan`, `adhar`, `votterid`, `votting_ward`, `gst`, `createdby`, `createddate`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, now())");

        // bind paramet
        $statement->bind_param("iissssss", $candidate_id, $personid, $pan, $adhar, $votterid, $votting_ward, $gst, $createdby);
        
        // execute statement
        if($statement->execute()){
            $result = array(
                "id" => 0,
                "status" => TRUE
            );
        }else{
            $result = array(
                "id" => 0,
                "status" => FALSE
            );
        }
        
        // close statement and connection
        $statement->close();
        
        return $result;
    }

    public function getRowCount($tablename, $con)
    {
        $id = 0;
        $query = "SELECT count(`id`) as count FROM " . $tablename;

        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            if ($row = mysqli_fetch_assoc($result)) {
                $id = $row["count"];
                $id = $id + 1;
            }
        }
        return $id;
    }

    public function createCandidatePerson($person, $conn)
    {

        // set parameters
        $personid = $this->getRowCount("candidate_person", $conn);
        $person->setPersonid($personid);
        $fname = $person->getFname();
        $mname = $person->getMname();
        $lname = $person->getLname();
        $dob = $person->getDob();
        $gender = $person->getGender();
        $createdby = $person->getCreatedby();
        $updatedby = $person->getUpdatedby();

        // create statement
        $statement = $conn->prepare("INSERT INTO `candidate_person`(`personid`, `fname`, `mname`, `lname`, `dob`, `gender`, `createdby`, `createddate`, `updatedby`, `updateddate`) VALUES (?, ?, ?, ?, ?, ?, ?, now(), ?, now())");

        // bind paramet
        $statement->bind_param("isssssss", $personid, $fname, $mname, $lname, $dob, $gender, $createdby, $updatedby);

        // execute statement
        if ($statement->execute()) {
            $result = array(
                "id" => 0,
                "status" => TRUE
            );
        } else {
            $result = array(
                "id" => 0,
                "status" => FALSE
            );
        }
        // close statement and connection
        $statement->close();
        return $result;
    }


    public function createCandidate($candidate)
    {
        $con = new Connection();
        $conn = $con->getConnection();
        
        $result = $this->createCandidatePerson($candidate, $conn);
        
        if ($result["status"]) {

            // set parameters
            $candidate_id = $this->getRowCount("candidate", $conn);
            
            $candidate->setCandidate_id($candidate_id);
            $personid = $candidate->getPersonid();
            $entity_id = $candidate->getEntity_id();
            $entity_type = $candidate->getEntity_type();
            $createdby = $candidate->getCreatedby();
            $updatedby = $candidate->getUpdatedby();

            // create statement
            $statement = $conn->prepare("INSERT INTO `candidate`(`candidate_id`, `personid`, `entity_id`, `entity_type`, `createdby`, `createddate`, `updatedby`, `updateddate`) VALUES (?, ?, ?, ?, ?, now(), ?, now())");

            // bind paramet
            $statement->bind_param("iiisss", $candidate_id, $personid, $entity_id, $entity_type, $createdby, $updatedby);

            // execute statement
            if ($statement->execute()) {
                $details=$candidate->getDetails();
                
                $details->setCandidate_id($candidate->getCandidate_id());
               
                $details->setPersonid($candidate->getPersonid());
                
                $this->createCandidateDetails($details, $conn);
                
                $contact=$candidate->getContact();
                
                $contact->setEntity_id($candidate->getCandidate_id());
                
                $cdao=new ContactDaoImpl();
                
                $cdao->createContact($contact, $conn);
                
                $address=$candidate->getAddress();
                
                $address->setEntity_id($candidate->getCandidate_id());
                
                $ldao=new LocationDaoImpl();
                
                $ldao->createAddress($address, $conn);
                
                $email=$candidate->getEmail();
                
                $email->setEntity_id($candidate->getCandidate_id());
                
                $edao=new EmailDaoImpl();
                
                $edao->createEmail($email, $conn);
                
                $user=$candidate->getUser();
                
                $user->setEntity_id($candidate->getCandidate_id());
                
                $udao=new AuthenticationDaoImpl();
                
                $result=$udao->createUser($user, $conn);
                
            } else {
                return result;
            }
            // echo $statement->affected_rows;
            // var_dump($statement);

            // close statement and connection
            $statement->close();
            
            $conn->close();
            
            return $result;
        }
    }
}

