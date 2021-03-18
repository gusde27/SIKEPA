<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ArtikelModel;
use App\Models\PelayananModel;

class AdminController extends BaseController
{

	//======= Halaman Sistem Informasi ========
	public function dashboard()
	{
		return view('Admin/DashboardAdmin');
	}

	public function pelayanan_admin()
	{
		return view('Admin/PelayananAdmin');
	}

	public function artikel_admin()
	{
		return view('Admin/ArtikelAdmin');
	}
	//======= End Halaman Sistem Informasi ========
	
}