<?php
namespace App\Models\Com\Atoconn\Authentication\Mysql;

use App\Models\Com\Atoconn\Authentication\AuthenticationDao;
use App\Models\Com\Atoconn\Database\Connection;

class AuthenticationDaoImpl implements AuthenticationDao
{

    public function __construct()
    {}

    public function createUser($user, $conn)
    {
        // set parameter
        $username = $user->getUsername();
        $name = $user->getName();
        $email = $user->getEmail();
        $mobile = $user->getMobile();
        $password = $user->getPassword();
        $remember_token = $user->getRemember_token();
        $entity_id = $user->getEntity_id();
        $entity_type = $user->getEntity_type();
        $status = $user->getStatus();
        $createdby = $user->getCreatedby();
        $updatedby = $user->getUpdatedby();

        // create statement
        $statement = $conn->prepare("INSERT INTO `users`(`username`, `name`, `email`, `mobile`, `password`, `remember_token`, `entity_id`, `entity_type`, `status`, `createdby`, `createddate`, `updatedby`, `updateddate`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now(), ?, now())");

        // bind paramet
        $statement->bind_param("ssssssisiss", $username, $name, $email, $mobile, $password, $remember_token, $entity_id, $entity_type, $status, $createdby, $updatedby);

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

    public function signin($user)
    {
        // get dbconnection
        $con = new Connection();
        $conn = $con->getConnection();

        $luser = array(); // create array to store data
        
        $username = $user->getUsername();
        $password = $user->getPassword();

        // prepare statement
        $statement = $conn->prepare("SELECT `id`, `username`, `name`, `email`, `mobile`,`remember_token`, `entity_id`, `entity_type`, `status`, `createdby`, `createddate`, `updatedby`, `updateddate` FROM `users` WHERE username=? and password=?");
        $statement->bind_param("ss",$username,$password);
        
        // execute statement
        $statement->execute();
        $result = mysqli_stmt_get_result($statement);

        // var_dump($result);

        // iterate resultset
        if (mysqli_num_rows($result) > 0) {
            if ($row = mysqli_fetch_assoc($result)) {
                $luser=$row;
            }
        }else{
            $luser=array("id"=>0,"status"=>FALSE,"message"=>"Please enter valid credentials!!!");
        }

        // close statement and dbconnection
        $statement->close();
        $conn->close();

        return $luser;
    }
}

