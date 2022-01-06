<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class MahasiswaSeeder extends Seeder
{
public function run()
{
$data = [
[
'nim' => 'C2055201048',
'nama' => 'ANGGELINA RENTIKA KAROLINA',
'jurusan' => 'Teknik Informatika',
'jenis_kelamin' => 'wanita',
'no_telp' => '085750841933',
'email' => 'anggelinarentikakarolina@gmailcom',
'alamat' => 'Jalan Pramuka 1 Kos Milenial NO.10 Palangkaraya',
'created_at' => Time::now()
],
[
'nim' => 'C2055201041',
'nama' => 'MISERICORDIAS DOMINI NATALIA BORU PANDIANGAN',
'jurusan' => 'Teknik Informatika',
'jenis_kelamin' => 'wanita',
'no_telp' => '085753887632',
'email' => 'misericordias@gmail.com',
'alamat' => 'Jalan RTA MILONO Palangkaraya',
'created_at' => Time::now()
],
[
'nim' => 'C2055201042',
'nama' => 'ANJELA RASTIANA',
'jurusan' => 'Teknik Informatika',
'jenis_kelamin' => 'wanita',
'no_telp' => '087838547716',
'email' => 'anjelarastiana@gmail.com',
'alamat' => 'Jalan Tjilik Riwut Palangkaraya',
'created_at' => Time::now()
]
];
$this->db->table('mahasiswa')->insertBatch($data);
}
}