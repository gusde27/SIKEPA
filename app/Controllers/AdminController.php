<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;

use App\Models\UserModel;
use App\Models\ArtikelModel;
use App\Models\PelayananModel;

class AdminController extends BaseController
{

	//======= Halaman Sistem Informasi ========
	public function dashboard()
	{
        $userModel = new UserModel;

        $operator = 'operator';

        $user = $userModel->where('level', $operator)->get()->getResultArray();
        $admin = $userModel->where('id', session()->get('id'))->get()->getResultArray();

        $data = [
            'user' => $user,
            'admin' => $admin
        ];

		return view('Admin/DashboardAdmin', $data);
	}

	public function pelayanan_admin()
	{
        $pelayananModel = new PelayananModel;

        $pelayanan = $pelayananModel->get()->getResultArray();

        $data = [
            'pelayanan' => $pelayanan
        ];

		return view('Admin/PelayananAdmin', $data);
	}

	public function artikel_admin()
	{
        $artikelModel = new ArtikelModel;

        $artikel = $artikelModel->get()->getResultArray();

        $data = [
            'artikel' => $artikel
        ];

		return view('Admin/ArtikelAdmin', $data);
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

            session()->setFlashdata('pesan', 'Data Operator gagal ditambahkan!');

            return redirect()->back();
            return redirect()->to('dashboard')->withInput()->with('validation', $validation);
        }

        $userModel = new UserModel();

        $nama = $request->getVar('nama');
        $username = $request->getVar('username');
        $password = $request->getVar('password');

        $userModel->save([
            'nama' => $nama,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'level' => 'operator'
        ]);

        session()->setFlashdata('pesan', 'Data Operator Berhasil ditambahkan!');
        
        return redirect()->back();
        return redirect()->to('dashboard')->with('validation', $validation);
    }

    //Update
    public function OperatorUpdate()
    {
        $request = \Config\Services::request(); //aktifkan request
        
        $userModel = new UserModel();

        $nama = $request->getVar('nama');
        $username = $request->getVar('username');
        $password = $request->getVar('password');

        $id_user = $request->getVar('id');

        if($password == ''){
            $userModel->save([
                'id' => $id_user,
                'nama' => $nama,
                'username' => $username
            ]);
    
            session()->setFlashdata('pesan', 'Data Operator Berhasil diubah!');
    
            return redirect()->back();
            return redirect()->to('dashboard');
        } else {
            $userModel->save([
                'id' => $id_user,
                'nama' => $nama,
                'username' => $username,
                'password' => password_hash($password, PASSWORD_BCRYPT)
            ]);
    
            session()->setFlashdata('pesan', 'Data Operator Berhasil diubah!');
    
            return redirect()->back();
            return redirect()->to('dashboard');
        }
    }

    //Delete
    public function OperatorDelete()
    {
        $request = \Config\Services::request(); //aktifkan request

        $userModel = new UserModel();

        $id = $request->getVar('id_operator');

        $userModel->delete($id);

        session()->setFlashdata('pesan', 'Data Operator Berhasil dihapus');

        return redirect()->back();
        return redirect()->to('dashboard');
    }
	//======= END CRUD User Operator ========

	//======= CRUD User Admin ========

    //update
    public function AdminUpdate()
    {
        $request = \Config\Services::request(); //aktifkan request
        
        $userModel = new UserModel();

        $nama = $request->getVar('nama');
        $username = $request->getVar('username');
        $password = $request->getVar('password');

        $id_admin = session()->get('id');

        if($password == ''){
            $userModel->save([
                'id' => $id_admin,
                'nama' => $nama,
                'username' => $username
            ]);
    
            session()->setFlashdata('pesan', 'Data Admin Berhasil diubah!');
    
            return redirect()->back();
            return redirect()->to('dashboard');
        } else {
            $userModel->save([
                'id' => $id_admin,
                'nama' => $nama,
                'username' => $username,
                'password' => password_hash($password, PASSWORD_BCRYPT)
            ]);
    
            session()->setFlashdata('pesan', 'Data Admin Berhasil diubah!');
    
            return redirect()->back();
            return redirect()->to('dashboard');
        }
    }

	//======= END CRUD User Admin ========

    //======= CRUD Pelayanan ========

	//Create
	public function PelayananTambah()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request(); //aktifkan request

        if (!$this->validate([
            'nama' => 'required',
            'syarat' => 'required',
            'deskripsi' => 'required'
        ])) {

            session()->setFlashdata('pesan', 'Data Pelayanan gagal ditambahkan!');

            return redirect()->back();
            return redirect()->to('pelayanan-admin')->withInput()->with('validation', $validation);
        }

        $pelayananModel = new PelayananModel();

        $nama = $request->getVar('nama');
        $syarat = $request->getVar('syarat');
        $deskripsi = $request->getVar('deskripsi');

        $slug = url_title($nama, '-', true);
        
        $pelayananModel->save([
            'nama' => $nama,
            'syarat' => $syarat,
            'deskripsi' => $deskripsi,
            'slug' => $slug
            ]);
            
        session()->setFlashdata('pesan', 'Data Pelayanan Berhasil ditambahkan!');
        
        return redirect()->back();
        return redirect()->to('pelayanan-admin')->with('validation', $validation);
    }
    
    //Update
    public function PelayananUpdate()
    {
        $request = \Config\Services::request(); //aktifkan request
        
        $pelayananModel = new PelayananModel();
        
        $nama = $request->getVar('nama');
        $syarat = $request->getVar('syarat');
        $deskripsi = $request->getVar('deskripsi');
        $slug = url_title($nama, '-', true);
        
        $id_pelayanan = $request->getVar('id_pelayanan');
        
        $pelayananModel->save([
                'id' => $id_pelayanan,
                'nama' => $nama,
                'syarat' => $syarat,
                'deskripsi' => $deskripsi,
                'slug' => $slug
        ]);
    
        session()->setFlashdata('pesan', 'Data Pelayanan Berhasil diubah!');
    
        return redirect()->back();
        return redirect()->to('pelayanan-admin');
        
    }

    //Delete
    public function PelayananDelete()
    {
        $request = \Config\Services::request(); //aktifkan request

        $pelayananModel = new PelayananModel();

        $id = $request->getVar('id_pelayanan');

        $pelayananModel->delete($id);

        session()->setFlashdata('pesan', 'Data Pelayanan Berhasil dihapus');

        return redirect()->back();
        return redirect()->to('dashboard');
    }
	//======= END CRUD User Operator ========
	
}