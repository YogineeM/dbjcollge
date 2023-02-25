<?php namespace App\Controllers;

class Naac extends BaseController
{
    public function introduction()
    {
        $data = array();
        $data["title"] = "Introduction";
        $data["parent"] = "IQAC";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('naac/introduction');
        echo view('common/footer');
        echo view('common/page-end');
    } 
    
    public function vision()
    {
        $data = array();
        $data["title"] = "Vision";
        $data["parent"] = "IQAC";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('naac/vision');
        echo view('common/footer');
        echo view('common/page-end');
    } 
    
    public function objective()
    {
        $data = array();
        $data["title"] = "Objective";
        $data["parent"] = "IQAC";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('naac/objective');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    public function composition()
    {
        $data = array();
        $data["title"] = "Composition";
        $data["parent"] = "IQAC";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('naac/composition');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    public function operational_features()
    {
        $data = array();
        $data["title"] = "Operational Features";
        $data["parent"] = "IQAC";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('naac/operational_features');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    public function aqar()
    {
        $data = array();
        $data["title"] = "AQAR";
        $data["parent"] = "IQAC";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('naac/aqar');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    public function members()
    {
        $data = array();
        $data["title"] = "Members";
        $data["parent"] = "IQAC";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('naac/members');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    public function iqac_mom()
    {
        $data = array();
        $data["title"] = "IQAC MOM";
        $data["parent"] = "IQAC";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('naac/iqac_mom');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    
    public function pso()
    {
        $data = array();
        $data["title"] = "Program Specific Outcome";
        $data["parent"] = "IQAC";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('naac/pso');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    public function best_practices()
    {
        $data = array();
        $data["title"] = "Best Practices";
        $data["parent"] = "IQAC";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('naac/best_practices');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    public function sop()
    {
        $data = array();
        $data["title"] = "SOP";
        $data["parent"] = "IQAC";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('naac/sop');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
   
}
