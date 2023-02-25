<?php namespace App\Controllers\com\atoconn\mlm\account;

use App\Controllers\BaseController;

class Account extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
	public function createMember()
	{
	    echo view('common/page-start');
	    echo view('common/header');
	    echo view('account/member');
	    echo view('common/footer');
	    echo view('common/page-end');
	}
}

