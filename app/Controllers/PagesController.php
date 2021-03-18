<?php

namespace App\Controllers;

class PagesController extends BaseController
{
	//======= Login/Logout Sistem Informasi ========
	public function logout() {
        
        session()->destroy();

        return redirect()->to('/');
    }

    public function loginPOST()
    {
        $pts = new UserModel();
        
        $pass = $this->request->getVar('password');
        
        $cek = $pts->select('id, username, password, nama, jenis, slug, level')->where([
            'username' => $this->request->getVar('username')
        ])->get()->getResultArray();

        //password_verify($pass, $cek[0]['password'])
        
        if (count($cek) == 0) {
            session()->setFlashdata('pesan', 'Username Anda Salah!');

            return redirect()->back();
        } elseif(password_verify($pass, $cek[0]['password'])) {
            $dataSession = [
                'id' => $cek[0]['id'],
                'nama_pts' => $cek[0]['nama'],
                'slug' => $cek[0]['slug'],
                'password' => $cek[0]['password'],
                'jenis_pts' => $cek[0]['jenis'],
                'level' => $cek[0]['level']
            ];
            session()->set($dataSession);

            if (session()->get('level') == "pts") {
                return redirect()->to('dashboard');
            } elseif (session()->get('level') == "admin") {
                return redirect()->to('dashboard-admin');
            }
            

            //return redirect()->to('dashboard');
            // if ($dataSession->get()->getResultArray() == 'pts') {
            //     return redirect()->to('dashboard');
            // }
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