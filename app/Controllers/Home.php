<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data =[
			'title' => 'Home | LPK-LKP INDERA'
		]; 
		return view('index', $data);
	}
}