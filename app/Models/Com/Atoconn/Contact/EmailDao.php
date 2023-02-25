<?php
namespace App\Models\Com\Atoconn\Contact;

interface  EmailDao
{
    
    public function createEmail($email,$conn);
}

