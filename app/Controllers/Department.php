<?php
namespace App\Controllers;

class Department extends BaseController
{
    
    public function activity()
    {
        $data = array();
        $data["title"] = "Activity";
        $data["parent"] = "Department";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('department/activities');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    public function carrer()
    {
        $data = array();
        $data["title"] = "Carrer";
        $data["parent"] = "Department";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('department/carrer');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    public function eligibility()
    {
        $data = array();
        $data["title"] = "Eligibility";
        $data["parent"] = "Department";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('department/Eligibility');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
//     public function features()
//     {
//         $data = array();
//         $data["title"] = "Features";
//         $data["parent"] = "Department";
//         $data["plink"] = "../naac/introduction";
//         echo view('common/page-start',$data);
//         echo view('common/header');
//         echo view('department/features');
//         echo view('common/footer');
//         echo view('common/page-end');
//     }
    
    public function internship()
    {
        $data = array();
        $data["title"] = "Internship";
        $data["parent"] = "Department";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('department/internship');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    public function introduction()
    {
        $data = array();
        $data["title"] = "Introduction";
        $data["parent"] = "Department";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('department/introduction');
        echo view('common/footer');
        echo view('common/page-end');
    }
    public function infrastructre()
    {
        $data = array();
        $data["title"] = "Infrastructre";
        $data["parent"] = "Department";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('department/infrastruture');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
//     public function objective()
//     {
//         $data = array();
//         $data["title"] = "Objective";
//         $data["parent"] = "Department";
//         $data["plink"] = "../naac/introduction";
//         echo view('common/page-start',$data);
//         echo view('common/header');
//         echo view('department/objective');
//         echo view('common/footer');
//         echo view('common/page-end');
//     }
    
    public function staff()
    {
        $data = array();
        $data["title"] = "Staff";
        $data["parent"] = "Department";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('department/staff');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    
    public function subjectList()
    {
        $data = array();
        $data["title"] = "subject Lst";
        $data["parent"] = "Department";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('department/subject_list');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    public function syllabus()
    {
        $data = array();
        $data["title"] = "Syllabus";
        $data["parent"] = "Department";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('department/syllabus');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    public function technicalPlans()
    {
        $data = array();
        $data["title"] = "Technical Plans";
        $data["parent"] = "Department";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('department/technical_plans');
        echo view('common/footer');
        echo view('common/page-end');
    }
    public function timeTable()
    {
        $data = array();
        $data["title"] = "Time Table";
        $data["parent"] = "Department";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('department/time_table');
        echo view('common/footer');
        echo view('common/page-end');
    }
    public function intakeCapacity()
    {
        $data = array();
        $data["title"] = "Time Table";
        $data["parent"] = "Department";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start',$data);
        echo view('common/header');
        echo view('department/intake_capacity');
        echo view('common/footer');
        echo view('common/page-end');
    }
    
    
}

