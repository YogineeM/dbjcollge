<?php
namespace App\Models\Com\Atoconn\Contact\Mysql;

use App\Models\Com\Atoconn\Contact\ContactDoa;

class ContactDaoImpl implements ContactDoa
{

    public function __construct()
    {}

    public function createContact($contact, $conn)
    {
        //set parameters
        $entity_id = $contact->getEntity_id();
        $client_id = $contact->getClient_id();
        $country_code = $contact->getCountry_code();
        $std = $contact->getStd();
        $phone_number = $contact->getPhone_number();
        $type = $contact->getType();
        $entity_type = $contact->getEntity_type();
        $is_primary = $contact->getIs_primary();
        $createdby = $contact->getCreatedby();
        $updatedby = $contact->getUpdatedby();
        
        //create statement
        $statement = $conn->prepare("INSERT INTO `candidate_contact`(`entity_id`, `client_id`, `country_code`, `std`, `phone_number`, `type`, `entity_type`, `is_primary`, `createdby`, `createddate`, `updatedby`, `updateddate`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, now(), ?, now())");
        
        //bind paramet
        $statement->bind_param("iisssssiss", $entity_id, $client_id, $country_code, $std, $phone_number, $type, $entity_type, $is_primary, $createdby, $updatedby);
        
        //execute statement
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
        //close statement and connection
        $statement->close();
        
        return $result;
    }
}

