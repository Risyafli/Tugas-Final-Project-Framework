<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class PeminjamanSeeder extends Seeder
{
public function run()
{
$data = [
[
'Kode_Buku' => 'MPK',
'NIM' => 'C2055201059',
'Nama' => 'Udin',
'Nama_Buku' => 'Metode Penelitian Kualitatif',
'no_telp' => '081223456789',
'email' => 'udin2244@gmail.com',
'created_at' => Time::now()
]
];
$this->db->table('Peminjaman')->insertBatch($data);
}
}