<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class UsersSeeder extends Seeder
{
public function run()
{
//
$data = [
[
'username' => 'willy',
'password' => password_hash('willy2512', PASSWORD_BCRYPT),
'name' => 'Willyanto Nadelaku',
'created_at' => Time::now()
]
];
$this->db->table('users')->insertBatch($data);
}
}