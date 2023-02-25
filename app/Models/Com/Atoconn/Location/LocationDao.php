<?php
namespace App\Models\Com\Atoconn\Location;

interface LocationDao
{
    public function createAddress($address,$conn);
}

