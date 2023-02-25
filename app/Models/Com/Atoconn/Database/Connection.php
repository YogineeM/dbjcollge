<?php
namespace App\Models\Com\Atoconn\Database;

class Connection
{

    public function __construct()
    {}
    
    public function getConnection(){
        
//         $host = "localhost";
//         $user = "root";
//         $password = "";
//         $db = "aem_adm_dev";
        
        $host = "microvity.com:3306";
        $user = "microvit_adm";
        $password = "r{!HjB(!9w1?";
        $db = "microvit_adm";
        
        $conn = mysqli_connect ( $host, $user, $password, $db );
        
        // Check connection
        if (mysqli_connect_errno ()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error ();
        }
        return $conn;
    }
}

