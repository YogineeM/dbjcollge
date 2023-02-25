<?php namespace App\Filters\Common;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class BasicFilter implements FilterInterface
{
    public function before(RequestInterface $request)
    {
//         echo "I am Filter";
    }
    
    //--------------------------------------------------------------------
    
    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}