<?php
namespace App\Controllers;
use App\Models\BukuModel;
class Buku extends BaseController
{
protected $buku;
function __construct()
{
$this->buku = new BukuModel();
}
public function index()
{
$data['pageTitle'] = 'Daftar Buku';
$data['buku'] = $this->buku->findAll();
return view('dashboard/buku', $data);
}
public function create()
{
$data['pageTitle'] = 'Input Data Buku';
return view('dashboard/buku_create', $data);
}
public function store()
{
if (!$this->validate([
'kode' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'penulis' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'judul' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'kategori' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
])) {
session()->setFlashdata('error', $this->validator->listErrors());
return redirect()->back()->withInput();
}
$this->buku->insert([
'kode' => $this->request->getVar('kode'),
'penulis' => $this->request->getVar('penulis'),
'judul' => $this->request->getVar('judul'),
'kategori' => $this->request->getVar('kategori')
]);
session()->setFlashdata('message', 'Tambah Data Buku Berhasil');
return redirect()->to('/buku');
}
function edit($kode)
{
$dataBuku = $this->buku->find($kode);
if (empty($dataBuku)) {
throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
}
$data['pageTitle'] = 'Edit Data Buku';
$data['buku'] = $dataBuku;
return view('dashboard/buku_edit', $data);
}
public function update($kode)
{
if (!$this->validate([
'kode' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'penulis' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'judul' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
'kategori' => [
'rules' => 'required',
'errors' => [
'required' => '{field} Harus diisi'
]
],
])) {
session()->setFlashdata('error', $this->validator->listErrors());
return redirect()->back();
}
$this->buku->update($kode, [
'kode' => $this->request->getVar('kode'),
'penulis' => $this->request->getVar('penulis'),
'judul' => $this->request->getVar('judul'),
'kategori' => $this->request->getVar('kategori')
]);
session()->setFlashdata('message', 'Update Data Buku Berhasil');
return redirect()->to('/buku');
}
function delete($kode)
{
$dataBuku = $this->buku->find($kode);
if (empty($dataBuku)) {
throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
}
$this->buku->delete($kode);
session()->setFlashdata('message', 'Delete Data Buku Berhasil');
return redirect()->to('/buku');
}
public function view($kode)
{
$dataBuku = $this->buku->find($kode);
if (empty($dataBuku)) {
throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
}
$data['pageTitle'] = 'Data Buku';
$data['buku'] = $dataBuku;
return view('dashboard/buku_view', $data);
}
}