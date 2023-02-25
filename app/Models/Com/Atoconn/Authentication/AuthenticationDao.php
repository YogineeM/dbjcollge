<?php
namespace App\Models\Com\Atoconn\Authentication;

interface AuthenticationDao
{

   public function createUser($user,$conn);
   
   public function signin($user);
}

