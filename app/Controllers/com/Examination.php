<?php
namespace App\Controllers\com;

use App\Controllers\BaseController;

class Examination extends BaseController
{
   
    
    public function examination()
    {
        $data = array();
        $data["title"] = "Examination";
        $data["parent"] = "Resource";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('examination/examination');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
}

