<?php
namespace App\Controllers;
use App\Models\PeminjamanModel;
class Peminjaman extends BaseController
{
 protected $Peminjaman;
 function __construct()
 {
 $this->Peminjaman = new PeminjamanModel();
 }
 
 public function create()
 {
 $data['pageTitle'] = 'Input Peminjaman Buku';
 return view('dashboard/Peminjaman_create', $data);
 }
 public function store()
 {
    if (!$this->validate([
        'Kode_Buku' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
        ]
        ],
        'NIM' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
        ]
        ],
        'Nama' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
        ]
        ],
        'Nama_Buku' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
       ]
        ],
        'no_telp' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
       ]
       ],
        'email' => [
        'rules' => 'required|valid_email',
        'errors' => [
        'required' => '{field} Harus diisi',
        'valid_email' => 'Email Harus Valid'
        ]
        ]
        ])) {
        session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back();
 }
 $this->Peminjaman->insert([
    'Kode_Buku' => $this->request->getVar('Kode_Buku'),
    'NIM' => $this->request->getVar('NIM'),
    'Nama' => $this->request->getVar('Nama'),
    'Nama_Buku' => $this->request->getVar('Nama_Buku'),
    'no_telp' => $this->request->getVar('no_telp'),
    'email' => $this->request->getVar('email'),
 ]);
 session()->setFlashdata('message', 'Peminjaman Buku Berhasil');
 return redirect()->to('/Peminjaman');}

 public function index()
 {
 $data['pageTitle'] = 'Daftar Peminjaman';
 $data['Peminjaman'] = $this->Peminjaman->findAll();
 return view('dashboard/Peminjaman', $data);
 }
 function delete($Kode_Buku)
 {
 $dataPeminjaman = $this->Peminjaman->find($Kode_Buku);
 if (empty($dataPeminjaman)) {
 throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Peminjaman Buku
Tidak ditemukan !');
 }
 $this->Peminjaman->delete($Kode_Buku);
 session()->setFlashdata('message', 'Pengembalian Berhasil!');
 return redirect()->to('/Peminjaman');
 }
 public function view($Kode_Buku)
 {
 $dataPeminjaman = $this->Peminjaman->find($Kode_Buku);
 if (empty($dataPeminjaman)) {
 throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Peminjaman Buku Tidak ditemukan !');
 }
 $data['pageTitle'] = 'Data peminjaman';
 $data['Peminjaman'] = $dataPeminjaman;
 return view('dashboard/Peminjaman', $data);
 }

 }