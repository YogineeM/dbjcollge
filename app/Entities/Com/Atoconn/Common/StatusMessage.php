<?php
namespace App\Entities\Com\Atoconn\Common;

use CodeIgniter\Entity;

class StatusMessage extends Entity
{

    protected $attributes = [
        'id' => null,
        'status' => null, // Represents a username
        'message' => null
    ];
    
    public function __get(string $key)
    {
        if (isset($this->$key))
        {
            return $this->$key;
        }
    }
    
    public function __set(string $key, $value = null)
    {
        if (isset($this->$key))
        {
        $this->$key = $value;
        }
    }
}