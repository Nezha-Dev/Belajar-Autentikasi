<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function index()
	{
		$data =[
			'title' => 'Login | LPK-LKP INDERA'
		];
		return view('auth/login', $data);
	}

	public function daftar()
	{
		$data =[
			'title' => 'Daftar | LPK-LKP INDERA'
		];
		return view('auth/daftar', $data);
	}

	public function lupa()
	{
		$data =[
			'title' => 'Lupa Password | LPK-LKP INDERA'
		];
		return view('auth/lupa', $data);
	}
}