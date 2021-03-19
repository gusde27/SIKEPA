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

	//======= CRUD User Operator ========

	//Create
	public function OperatorTambah()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request(); //aktifkan request

        if (!$this->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required'
        ])) {

            session()->setFlashdata('pesan', 'Data Berita gagal ditambahkan!');

            return redirect()->back();
            return redirect()->to('Admin/DashboardAdmin')->withInput()->with('validation', $validation);
        }

        $userModel = new UserModel();

        $nama = $this->$request->getVar('nama');
        $username = $this->$request->getVar('username');
        $password = $this->$request->getVar('password');

        $userModel->save([
            'nama' => $nama,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'level' => 'admin'
        ]);

        session()->setFlashdata('pesan', 'Data Berita Berhasil ditambahkan!');

        return redirect()->to('Admin/DashboardAdmin')->with('validation', $validation);
    }
	//======= END CRUD User Operator ========
	
}