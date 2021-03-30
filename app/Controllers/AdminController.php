<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;

use App\Models\UserModel;
use App\Models\ArtikelModel;
use App\Models\PelayananModel;
use App\Models\StrukturModel;
use App\Models\VisiModel;
use App\Models\MisiModel;
use App\Models\GaleriModel;
use App\Models\FAQModel;

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

	public function faq_admin()
	{
        $faqModel = new FAQModel;

        $faq = $faqModel->get()->getResultArray();

        $data = [
            'faq' => $faq
        ];

		return view('Admin/FAQAdmin', $data);
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

	public function struktur_admin()
	{
        $strukturModel = new StrukturModel;

        $struktur = $strukturModel->get()->getResultArray();

        $data = [
            'struktur' => $struktur
        ];

        //dd($struktur);
		return view('Admin/StrukturAdmin', $data);
	}

	public function home_admin()
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

        //dd($struktur);
		return view('Admin/HomeAdmin', $data);
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
        return redirect()->to('pelayanan-admin');
    }
	//======= END CRUD Pelayanan ========

    //======= CRUD Artikel ========

	//Create
	public function ArtikelTambah()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request(); //aktifkan request

        if (!$this->validate([
            'judul' => 'required',
            'deskripsi' => 'required'
        ])) {

            session()->setFlashdata('pesan', 'Data Artikel gagal ditambahkan!');

            return redirect()->back();
            return redirect()->to('artikel-admin')->withInput()->with('validation', $validation);
        }

        $artikelModel = new ArtikelModel();

        if ($request->getFile('gambar') !=  '') 
        {
        $judul = $request->getVar('judul');
        $deskripsi = $request->getVar('deskripsi');

        $slug = url_title($judul, '-', true);

        $gambar = $request->getFile('gambar');

        $nama_gambar = $judul . "." . $gambar->getExtension();
        
        $gambar->move("assets/img/artikel", $judul . "." . $gambar->getExtension(), true);
        
        $artikelModel->save([
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'gambar' => $nama_gambar,
            'slug' => $slug
            ]);
            
        session()->setFlashdata('pesan', 'Data Artikel Berhasil ditambahkan!');
        
        return redirect()->back();
        return redirect()->to('artikel-admin');
        } 
        else
        {
        $judul = $request->getVar('judul');
        $deskripsi = $request->getVar('deskripsi');

        $slug = url_title($judul, '-', true);
        
        $artikelModel->save([
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'slug' => $slug
            ]);
            
        session()->setFlashdata('pesan', 'Data Artikel Berhasil ditambahkan!');
        
        return redirect()->back();
        return redirect()->to('artikel-admin')->with('validation', $validation);
        }
    }
    
    //Update
    public function ArtikelUpdate()
    {
        $request = \Config\Services::request(); //aktifkan request
        
        $artikelModel = new ArtikelModel();

        if ($request->getFile('gambar') !=  '') 
        {
            
        $id_artikel = $request->getVar('id_artikel');

        $judul = $request->getVar('judul');
        $deskripsi = $request->getVar('deskripsi');

        $slug = url_title($judul, '-', true);

        $gambar = $request->getFile('gambar');
        
        $nama_gambar = $judul . "." . $gambar->getExtension();

        $gambar->move("assets/img/artikel", $judul . "." . $gambar->getExtension(), true);
        
        $artikelModel->save([
            'id' => $id_artikel,
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'gambar' => $nama_gambar,
            'slug' => $slug
            ]);
            
        session()->setFlashdata('pesan', 'Data Artikel Berhasil diubah!');
        
        return redirect()->back();
        return redirect()->to('artikel-admin');
        } 
        else
        {
        $id_artikel = $request->getVar('id_artikel');
        $judul = $request->getVar('judul');
        $deskripsi = $request->getVar('deskripsi');

        $slug = url_title($judul, '-', true);
        
        $artikelModel->save([
            'id' => $id_artikel,
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'slug' => $slug
            ]);
            
        session()->setFlashdata('pesan', 'Data Artikel Berhasil diubah!');
        
        return redirect()->back();
        return redirect()->to('artikel-admin');
        }
        
    }

    //Delete
    public function ArtikelDelete()
    {
        $request = \Config\Services::request(); //aktifkan request

        $artikelModel = new ArtikelModel();

        $id_artikel = $request->getVar('id_artikel');

        $nama_gambar = $request->getVar('gambar');

        $artikelModel->delete($id_artikel);
        unlink('assets/img/artikel/' . $nama_gambar);

        session()->setFlashdata('pesan', 'Data Artikel Berhasil dihapus');

        return redirect()->back();
        return redirect()->to('artikel-admin');
    }
	//======= END CRUD Artikel ========

    //======= CRUD Struktur ========
	
    //Update
    public function StrukturUpdate()
    {
        $request = \Config\Services::request(); //aktifkan request
        
        $strukturModel = new StrukturModel();

        $id_struktur = $request->getVar('id_struktur');

        $struktur = $request->getVar('struktur');

        
        $strukturModel->save([
            'id' => $id_struktur,
            'isi' => $struktur
            ]);
            
        session()->setFlashdata('pesan', 'Data Struktur Berhasil diubah!');
        
        return redirect()->back();
        return redirect()->to('struktur-admin');
        
    }

	//=======  END CRUD Struktur ========

    
    //======= CRUD Visi ========

	//Create
	public function VisiTambah()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request(); //aktifkan request

        if (!$this->validate([
            'visi' => 'required',
        ])) {

            session()->setFlashdata('pesan', 'Data Visi gagal ditambahkan!');

            return redirect()->back();
            return redirect()->to('home-admin')->withInput()->with('validation', $validation);
        }

        $visiModel = new VisiModel();

        $visi = $request->getVar('visi');

        $visiModel->save([
            'visi' => $visi
            ]);
            
        session()->setFlashdata('pesan', 'Data Visi Berhasil ditambahkan!');
        
        return redirect()->back();
        return redirect()->to('home-admin')->with('validation', $validation);
    }
    
    //Update
    public function VisiUpdate()
    {
        $request = \Config\Services::request(); //aktifkan request
        
        $visiModel = new VisiModel();
        
        $visi = $request->getVar('visi');
        
        $id_visi = $request->getVar('id_visi');
        
        $visiModel->save([
                'id' => $id_visi,
                'visi' => $visi
        ]);
    
        session()->setFlashdata('pesan', 'Data Visi Berhasil diubah!');
    
        return redirect()->back();
        return redirect()->to('home-admin');
        
    }

    //Delete
    public function VisiDelete()
    {
        $request = \Config\Services::request(); //aktifkan request

        $visiModel = new VisiModel();

        $id = $request->getVar('id_visi');

        $visiModel->delete($id);

        session()->setFlashdata('pesan', 'Data Visi Berhasil dihapus');

        return redirect()->back();
        return redirect()->to('home-admin');
    }
	//======= END CRUD Visi ========

    //======= CRUD misi ========

	//Create
	public function MisiTambah()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request(); //aktifkan request

        if (!$this->validate([
            'misi' => 'required',
        ])) {

            session()->setFlashdata('pesan', 'Data Misi gagal ditambahkan!');

            return redirect()->back();
            return redirect()->to('home-admin')->withInput()->with('validation', $validation);
        }

        $misiModel = new MisiModel();

        $misi = $request->getVar('misi');

        $misiModel->save([
            'misi' => $misi
            ]);
            
        session()->setFlashdata('pesan', 'Data Misi Berhasil ditambahkan!');
        
        return redirect()->back();
        return redirect()->to('home-admin')->with('validation', $validation);
    }
    
    //Update
    public function MisiUpdate()
    {
        $request = \Config\Services::request(); //aktifkan request
        
        $misiModel = new MisiModel();
        
        $misi = $request->getVar('misi');
        
        $id_misi = $request->getVar('id_misi');
        
        $misiModel->save([
                'id' => $id_misi,
                'misi' => $misi
        ]);
    
        session()->setFlashdata('pesan', 'Data Misi Berhasil diubah!');
    
        return redirect()->back();
        return redirect()->to('home-admin');
        
    }

    //Delete
    public function MisiDelete()
    {
        $request = \Config\Services::request(); //aktifkan request

        $misiModel = new MisiModel();

        $id = $request->getVar('id_misi');

        $misiModel->delete($id);

        session()->setFlashdata('pesan', 'Data Misi Berhasil dihapus');

        return redirect()->back();
        return redirect()->to('home-admin');
    }
	//======= END CRUD misi ========


    //======= CRUD Galeri ========

	//Create
	public function GaleriTambah()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request(); //aktifkan request

        $galeriModel = new GaleriModel();

        if ($request->getFile('gambar') !=  '') 
        {

        $galeri = $request->getFile('gambar');

        $nama_galeri = $galeri->getRandomName();

        //$nama_galeri = $nama . "." . $galeri->getExtension();
        
        $galeri->move("assets/img/galeri", $nama_galeri, true);
        
        $galeriModel->save([
            'gambar' => $nama_galeri
            ]);
            
        session()->setFlashdata('pesan', 'Data galeri Berhasil ditambahkan!');
        
        return redirect()->back();
        return redirect()->to('home-admin');
        } 
        else
        {
            
        session()->setFlashdata('pesan', 'Data Gambar Gagal ditambahkan!');
        
        return redirect()->back();
        return redirect()->to('home-admin')->with('validation', $validation);
        }
    }

    //Delete
    public function GaleriDelete()
    {
        $request = \Config\Services::request(); //aktifkan request

        $galeriModel = new GaleriModel();

        $id_gambar = $request->getVar('id_gambar');
        $nama_gambar = $request->getVar('nama_gambar');

        $galeriModel->delete($id_gambar);
        unlink('assets/img/galeri/' . $nama_gambar);

        session()->setFlashdata('pesan', 'Data Gambar Berhasil dihapus');

        return redirect()->back();
        return redirect()->to('home-admin');
    }
	//======= END CRUD Galeri ========

    //======= CRUD FAQ ========

	//Create
	public function FAQTambah()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request(); //aktifkan request

        if (!$this->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ])) {

            session()->setFlashdata('pesan', 'Data FAQ gagal ditambahkan!');

            return redirect()->back();
            return redirect()->to('faq-admin')->withInput()->with('validation', $validation);
        }

        $faqModel = new FAQModel();

        $pertanyaan = $request->getVar('pertanyaan');
        $jawaban = $request->getVar('jawaban');

        $faqModel->save([
            'pertanyaan' => $pertanyaan,
            'jawaban' => $jawaban
            ]);
            
        session()->setFlashdata('pesan', 'Data FAQ Berhasil ditambahkan!');
        
        return redirect()->back();
        return redirect()->to('faq-admin');
    }
    
    //Update
    public function FAQUpdate()
    {
        $request = \Config\Services::request(); //aktifkan request
        
        $faqModel = new FAQModel();
        
        $pertanyaan = $request->getVar('pertanyaan');
        $jawaban = $request->getVar('jawaban');
        
        $id_faq = $request->getVar('id_faq');
        
        $faqModel->save([
                'id' => $id_faq,
                'pertanyaan' => $pertanyaan,
                'jawaban' => $jawaban
        ]);
    
        session()->setFlashdata('pesan', 'Data FAQ Berhasil diubah!');
    
        return redirect()->back();
        return redirect()->to('faq-admin');
        
    }

    //Delete
    public function FAQDelete()
    {
        $request = \Config\Services::request(); //aktifkan request

        $faqModel = new FAQModel();

        $id = $request->getVar('id_faq');

        $faqModel->delete($id);

        session()->setFlashdata('pesan', 'Data FAQ Berhasil dihapus');

        return redirect()->back();
        return redirect()->to('faq-admin');
    }
	//======= END CRUD FAQ ========



    
}