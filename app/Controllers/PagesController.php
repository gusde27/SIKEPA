<?php

namespace App\Controllers;

class PagesController extends BaseController
{

	//======= Halaman Sistem Informasi ========
	public function index()
	{
		return view('Pages/HomePages');
	}
	
	public function struktur_organisasi()
	{
		return view('Pages/StrukturPages');
	}

	public function pelayanan()
	{
		return view('Pages/PelayananPages');
	}

	public function artikel()
	{
		return view('Pages/ArtikelPages');
	}

	public function faq()
	{
		return view('Pages/FAQPages');
	}
	//======= End Halaman Sistem Informasi ========
	

	//======= untuk mengembalikan halaman ========
	public function back()
	{
		return redirect()->back();
	}
	//======= end untuk mengembalikan halaman ========
}