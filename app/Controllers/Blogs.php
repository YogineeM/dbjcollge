<?php namespace App\Controllers;

class Blogs extends BaseController
{
    public function informative($page)
    {
        echo view('common/page-start-3');
        echo view('common/header-3');
        echo view('blogs/'.$page);
        echo view('blogs/side-bar-3');
        echo view('common/footer-3');
        echo view('common/page-end-3');
    }
    
    public function all()
    {
        echo view('common/page-start');
        echo view('common/header');
        echo view('blogs/knowledge');
        echo view('common/footer');
        echo view('common/page-end');
    }
}
