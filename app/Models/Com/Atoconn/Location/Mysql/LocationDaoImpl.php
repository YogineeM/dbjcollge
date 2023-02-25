<?php
namespace App\Models\Com\Atoconn\Location\Mysql;

use App\Models\Com\Atoconn\Location\LocationDao;

class LocationDaoImpl implements LocationDao
{

    public function __construct()
    {}

    public function createAddress($address,$conn)
    {        
        //set parameters
        $type = $address->getType();
        $apt_no = $address->getApt_no();
        $floor = $address->getFloor();
        $block = $address->getBlock();
        $apartment = $address->getApartment();
        $street = $address->getStreet();
        $landmark = $address->getLandmark();
        $city = $address->getCity();
        $postal = $address->getPostal();
        $tal = $address->getTal();
        $dist = $address->getDist();
        $state = $address->getState();
        $country = $address->getCountry();
        $pincode = $address->getPincode();
        $latitude = $address->getLatitude();
        $longitude = $address->getLongitude();
        $entity_id = $address->getEntity_id();
        $entity_type = $address->getEntity_type();
        $client_id = $address->getClient_id();
        $createdby = $address->getCreatedby();
        $updatedby = $address->getUpdatedby();
        
        //create statement
        $statement = $conn->prepare("INSERT INTO `candidate_address`(`type`, `apt_no`, `floor`, `block`, `apartment`, `street`, `landmark`, `city`, `postal`, `tal`, `dist`, `state`, `country`, `pincode`, `latitude`, `longitude`, `entity_id`, `entity_type`, `client_id`, `createdby`, `createddate`, `updatedby`, `updateddate`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now(), ?, now())");
        
        //bind paramet
        $statement->bind_param("ssssssssssssssddssiss", $type, $apt_no, $floor, $block, $apartment, $street, $landmark, $city, $postal, $tal, $dist, $state, $country, $pincode, $latitude, $longitude, $entity_id, $entity_type, $client_id, $createdby, $updatedby);
        
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

