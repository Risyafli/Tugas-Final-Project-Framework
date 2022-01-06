<?php
namespace App\Models;
use CodeIgniter\Model;
class PeminjamanModel extends Model
{
protected $table = "Peminjaman";
protected $primaryKey = "Kode_Buku";
protected $returnType = "object";
protected $useTimestamps = true;
protected $allowedFields = ['Kode_Buku', 'NIM', 'Nama', 'Nama_Buku', 'no_telp', 'email'];
}
