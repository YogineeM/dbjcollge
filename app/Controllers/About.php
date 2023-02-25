<?php

namespace App\Controllers;

class About extends BaseController
{

    public function nesociety()
    {
        $data = array();
        $data["title"] = "NE Society";
        $data["parent"] = "About";
        $data["plink"] = "#";
        echo view('common/page-start', $data);
        echo view('common/header');
        echo view('company/nesociety');
        echo view('common/footer');
        echo view('common/page-end');
    }

    public function message($page)
    {
        $data = array();
        if (strcmp($page, "chairman") == 0) {
            $data["title"] = "Chairman's Message";
            $data["parent"] = "About";
            $data["plink"] = "#";
        }
        if (strcmp($page, "principal") == 0) {
            $data["title"] = "Pricipal's Message ";
            $data["parent"] = "About";
            $data["plink"] = "#";
        }
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('company/' . $page);
        echo view('common/footer');
        echo view('common/page-end');
    }

    public function features()
    {
        
        $data = array();
        $data["title"] = "Features";
        $data["parent"] = "About";
        $data["plink"] = "#";
        echo view('common/page-start', $data);
        echo view('common/header');
        echo view('company/features');
        echo view('common/footer');
        echo view('common/page-end');
    }

    public function perspective()
    {
        $data = array();
        $data["title"] = "Perspective Plan";
        $data["parent"] = "About";
        $data["plink"] = "#";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('company/perspective');
        echo view('common/footer');
        echo view('common/page-end');
    }

    public function governing_council()
    {
        $data = array();
        $data["title"] = "Governing Concil";
        $data["parent"] = "About";
        $data["plink"] = "#";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('company/governing_council');
        echo view('common/footer');
        echo view('common/page-end');
    }
}
