<?php namespace App\Controllers;

class College extends BaseController
{
    public function contact()
    {
        $data = array();
        $data["title"] = "Contact";
        $data["parent"] = "Home";
        $data["plink"] = "../home/index";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('communication/contact');
        echo view('common/footer');
        echo view('common/page-end');
    } 
    
    public function alumni()
    {
        $data = array();
        $data["title"] = "Alumni";
        $data["parent"] = "Home";
        $data["plink"] = "../home/index";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('communication/alumni');
        echo view('common/footer');
        echo view('common/page-end');
    } 
    
    public function feedback()
    {
        $data = array();
        $data["title"] = "Feedback";
        $data["parent"] = "Home";
        $data["plink"] = "../home/index";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('communication/feedback');
        echo view('common/footer');
        echo view('common/page-end');
    } 
    
    public function committees($page)
    {
        $data = array();
        if (strcmp($page, "development") == 0) {
            $data["title"] = "College Development Commitee";
            $data["parent"] = "Home";
            $data["plink"] = "../home/index";
        }
        if (strcmp($page, "special_cell") == 0) {
            $data["title"] = "Special Cell";
            $data["parent"] = "Home";
            $data["plink"] = "../home/index";
        }
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('committees/' . $page);
        echo view('common/footer');
        echo view('common/page-end');
    }
   
}
