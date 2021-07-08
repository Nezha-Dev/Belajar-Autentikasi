<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data =[
			'title' => 'Admin Dashboard | LPK-LKP INDERA'
		];
		return view('backend/index', $data);
	}
}