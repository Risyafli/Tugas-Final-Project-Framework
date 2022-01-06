<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class BukuSeeder extends Seeder
{
public function run()
{
$data = [
[
'kode' => 'MPK',
'penulis' => 'Sugiyono',
'judul' => 'Metode Penelitian Kualitatif',
'kategori' => 'pendidikan',
'created_at' => Time::now()
],
[
'kode' => 'MLKS',
'penulis' => 'Wildan Zulkarnain',
'judul' => 'Manajemen Layanan Khusus di Sekolah',
'kategori' => 'pendidikan',
'created_at' => Time::now()
]
];
$this->db->table('buku')->insertBatch($data);
}
}