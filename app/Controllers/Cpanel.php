<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cpanel extends BaseController
{
	// Field untuk Sistem Login

	public function index()
	{
		return view('index');
	}
	public function dashboard()
	{
		$data = [
			'judul'	=> 'Dashboard',
			'welcomemessage'	=> 'Selamat Datang'
		];

		return view('dashboard', $data);
	}
	public function cif()
	{
		$data = [
			'judul'		=> 'Customer Identification file'
		];
		return view('cif', $data);
	}




	// Field Untuk Supervisor

	// Field untuk Customer Service

	// Field untuk Teller

	// Field untuk Back Office

}
