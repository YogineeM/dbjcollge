<?php
namespace App\Models\Com\Atoconn\Contact\Mysql;

use App\Models\Com\Atoconn\Contact\EmailDao;

class EmailDaoImpl implements EmailDao
{

    public function __construct()
    {}

    public function createEmail($email, $conn)
    {
        $sql = "INSERT INTO `" . $email->getTablename() . "`(`entity_id`, `clientid`, `type`, `entity_type`, `email`, `is_primary`, `createdby`, `createddate`, `updatedby`, `updateddate`) VALUES (" . $email->getEntity_id() . "," . $email->getClientid() . ",'" . $email->getType() . "', '" . $email->getEntity_type() . "','" . $email->getEmail() . "', '" . $email->getIs_primary() . "','" . $email->getCreatedby() . "',now(), '" . $email->getUpdatedby() . "',now())";
        
        if (mysqli_query($conn, $sql)) {
            $result = array(
                "status" => "success"
            );
            return $result;
        } else {
            $result = array(
                "status" => "success",
                "msg" => "Error: " . $sql . "<br>" . mysqli_error($conn)
            );
            return $result;
        }
    }
    
}

