<?php namespace App\Controllers;

class Course extends BaseController
{
	public function index()
	{
		return view('course/index');
	}

	public function detail()
	{
		return view('course/detail');
	}

	//--------------------------------------------------------------------

}
