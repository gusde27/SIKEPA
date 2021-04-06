<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ArtikelModel;
use App\Models\PelayananModel;
use App\Models\StrukturModel;
use App\Models\VisiModel;
use App\Models\MisiModel;
use App\Models\GaleriModel;
use App\Models\FAQModel;

class PagesController extends BaseController
{

	//======= Login/Logout Sistem Informasi ========
	public function Logout() {
        
        session()->destroy();

        return redirect()->to('/');
    }

    public function LoginPost()
    {
        $request = \Config\Services::request();
        $user = new UserModel();
        
		$username = $request->getVar('username');
        $pass = $request->getVar('password');
        
        //dd($username, $pass);
        
        
        $cek = $user->select('id, nama, username, password, level')->where([
            'username' => $username
        ])->get()->getResultArray();

        //password_verify($pass, $cek[0]['password'])
        
        if (count($cek) == 0) {
            session()->setFlashdata('pesan', 'Username Anda Salah!');

            return redirect()->back();
			
        } elseif(password_verify($pass, $cek[0]['password'])) {
            
			$dataSession = [
                'id' => $cek[0]['id'],
                'nama' => $cek[0]['nama'],
                'level' => $cek[0]['level']
            ];
            session()->set($dataSession);

			//return redirect()->to('dashboard');
			
            if (session()->get('level') == "admin") {
                return redirect()->to('dashboard');
            }
			elseif (session()->get('level') == "operator") {
                return redirect()->to('dashboard');
            }
            
        } 
        else {
            session()->setFlashdata('pesan', 'Password Anda Salah!');

            return redirect()->back();
        }
        

    }
	//======= End Login/Logout Sistem Informasi ========
	
	
	//======= Halaman Sistem Informasi ========
	public function index()
	{
        $visiModel = new VisiModel;
        $misiModel = new MisiModel;
        $galeriModel = new GaleriModel;

        $visi = $visiModel->get()->getResultArray();
        $misi = $misiModel->get()->getResultArray();
        $galeri = $galeriModel->get()->getResultArray();

        $data = [
            'visi' => $visi,
            'misi' => $misi,
            'galeri' => $galeri
        ];

		return view('Pages/HomePages', $data);
	}
	
	public function struktur_organisasi()
	{
        $strukturModel = new StrukturModel;

        $struktur = $strukturModel->get()->getResultArray();

        $data = [
            'struktur' => $struktur
        ];

		return view('Pages/StrukturPages', $data);
	}

	public function pelayanan()
	{
		$pelayananModel = new PelayananModel;

        $pelayanan = $pelayananModel->get()->getResultArray();

        $data = [
            'pelayanan' => $pelayanan
        ];

		return view('Pages/PelayananPages', $data);
	}

	public function Login()
	{
		return view('Pages/LoginPages');
	}

	public function artikel()
	{
		$artikelModel = new ArtikelModel;

        $artikel = $artikelModel->get()->getResultArray();

        $data = [
            'artikel' => $artikel
        ];

		return view('Pages/ArtikelPages', $data);
	}

    public function artikel_detail($slug)
	{
		$artikelModel = new ArtikelModel;

        $artikel = $artikelModel->where('slug', $slug)->get()->getResultArray();

        $data = [
            'artikel' => $artikel
        ];

		return view('Pages/ArtikelDetailPages', $data);
	}

	public function faq()
	{
        $faqModel = new FAQModel;

        $faq = $faqModel->get()->getResultArray();

        $data = [
            'faq' => $faq
        ];

		return view('Pages/FAQPages', $data);
	}
	//======= End Halaman Sistem Informasi ========
	

	//======= untuk mengembalikan halaman ========
	public function back()
	{
		return redirect()->back();
	}
	//======= end untuk mengembalikan halaman ========
}