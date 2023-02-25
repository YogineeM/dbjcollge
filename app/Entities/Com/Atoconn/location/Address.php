<?php
namespace App\Entities\Com\Atoconn\location;

class Address
{

    public function __construct()
    {}
    
    private $id;
    private $type;
    private $apt_no;
    private $floor;
    private $block;
    private $apartment;
    private $street;
    private $landmark;
    private $city;
    private $postal;
    private $tal;
    private $dist;
    private $state;
    private $country;
    private $pincode;
    private $latitude;
    private $longitude;
    private $entity_id;
    private $entity_type;
    private $client_id;
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
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @return mixed
     */
    public function getApt_no()
    {
        return $this->apt_no;
    }
    
    /**
     * @return mixed
     */
    public function getFloor()
    {
        return $this->floor;
    }
    
    /**
     * @return mixed
     */
    public function getBlock()
    {
        return $this->block;
    }
    
    /**
     * @return mixed
     */
    public function getApartment()
    {
        return $this->apartment;
    }
    
    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }
    
    /**
     * @return mixed
     */
    public function getLandmark()
    {
        return $this->landmark;
    }
    
    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * @return mixed
     */
    public function getPostal()
    {
        return $this->postal;
    }
    
    /**
     * @return mixed
     */
    public function getTal()
    {
        return $this->tal;
    }
    
    /**
     * @return mixed
     */
    public function getDist()
    {
        return $this->dist;
    }
    
    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
    
    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * @return mixed
     */
    public function getPincode()
    {
        return $this->pincode;
    }
    
    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    
    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
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
    public function getClient_id()
    {
        return $this->client_id;
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
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    /**
     * @param mixed $apt_no
     */
    public function setApt_no($apt_no)
    {
        $this->apt_no = $apt_no;
    }
    
    /**
     * @param mixed $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }
    
    /**
     * @param mixed $block
     */
    public function setBlock($block)
    {
        $this->block = $block;
    }
    
    /**
     * @param mixed $apartment
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
    }
    
    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }
    
    /**
     * @param mixed $landmark
     */
    public function setLandmark($landmark)
    {
        $this->landmark = $landmark;
    }
    
    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    
    /**
     * @param mixed $postal
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;
    }
    
    /**
     * @param mixed $tal
     */
    public function setTal($tal)
    {
        $this->tal = $tal;
    }
    
    /**
     * @param mixed $dist
     */
    public function setDist($dist)
    {
        $this->dist = $dist;
    }
    
    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }
    
    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
    
    /**
     * @param mixed $pincode
     */
    public function setPincode($pincode)
    {
        $this->pincode = $pincode;
    }
    
    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
    
    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
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
     * @param mixed $client_id
     */
    public function setClient_id($client_id)
    {
        $this->client_id = $client_id;
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

