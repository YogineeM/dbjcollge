<?php
namespace App\Controllers;

class Resource extends BaseController
{

    public function library()
    {
        $data = array();
        $data["title"] = "Liberary";
        $data["parent"] = "Resource";
        $data["plink"] = "#";
        echo view('common/page-start', $data);
        echo view('common/header');
        echo view('resources/library');
        echo view('common/footer');
        echo view('common/page-end');
    }

    public function research()
    {
        $data = array();
        $data["title"] = "Research";
        $data["parent"] = "Resource";
        $data["plink"] = "#";
        echo view('common/page-start', $data);
        echo view('common/header');
        echo view('resources/research');
        echo view('common/footer');
        echo view('common/page-end');
    }

    public function womendevelopment()
    {
        $data = array();
        $data["title"] = "Women Development Cell";
        $data["parent"] = "Resource";
        $data["plink"] = "#";
        echo view('common/page-start', $data);
        echo view('common/header');
        echo view('resources/women_development_cell');
        echo view('common/footer');
        echo view('common/page-end');
    }

    public function scholorship()
    {
        $data = array();
        $data["title"] = "Student Scholorship or Freeship";
        $data["parent"] = "Resource";
        $data["plink"] = "#";
        echo view('common/page-start', $data);
        echo view('common/header');
        echo view('resources/scholorship');
        echo view('common/footer');
        echo view('common/page-end');
    }

    public function studentsGrievancesCommittee()
    {
        $data = array();
        $data["title"] = "Student's Grievances Committee";
        $data["parent"] = "Resource";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start', $data);
        echo view('common/header');
        echo view('resources/students_Grievances_Committee');
        echo view('common/footer');
        echo view('common/page-end');
    }

    public function antiRaggingCommittee()
    {
        $data = array();
        $data["title"] = "Anti-ragging Committee";
        $data["parent"] = "Resource";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start', $data);
        echo view('common/header');
        echo view('resources/anti-ragging_committee');
        echo view('common/footer');
        echo view('common/page-end');
    }

    public function employmentCareerGuidanceCell()
    {
        $data = array();
        $data["title"] = "Employment Career Guidance Cell.php";
        $data["parent"] = "Resource";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start', $data);
        echo view('common/header');
        echo view('resources/employment_Career_Guidance_Cell');
        echo view('common/footer');
        echo view('common/page-end');
    }

    public function bCBookBank()
    {
        $data = array();
        $data["title"] = "BC Book Bank";
        $data["parent"] = "Resource";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start', $data);
        echo view('common/header');
        echo view('resources/bC_book_bank');
        echo view('common/footer');
        echo view('common/page-end');
    }

    public function vidyarthiKalyanMandal()
    {
        $data = array();
        $data["title"] = "Vidyarthi Kalyan Mandal";
        $data["parent"] = "Resource";
        $data["plink"] = "../naac/introduction";
        echo view('common/page-start', $data);
        echo view('common/header');
        echo view('resources/vidyarthiKalyanMandal');
        echo view('common/footer');
        echo view('common/page-end');
    }
}

