<?php
namespace App\Models;
use CodeIgniter\Model;
class BukuModel extends Model
{
protected $table = "buku";
protected $primaryKey = "kode";
protected $returnType = "object";
protected $useTimestamps = true;
protected $allowedFields = ['kode', 'penulis', 'judul', 'kategori'];
}