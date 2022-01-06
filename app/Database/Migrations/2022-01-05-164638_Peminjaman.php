<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Peminjaman extends Migration
{
public function up()
{
$this->forge->addField([
    'Kode_Buku' => [
    'type' => 'VARCHAR',
    'constraint' => 12,
    ],
    'NIM' => [
    'type' => 'VARCHAR',
    'constraint' => '100',
    ],
    'Nama' => [
    'type' => 'VARCHAR',
    'constraint' => '255',
    ],
    'Nama_Buku' => [
    'type' => 'VARCHAR',
    'constraint' => '255',
    ],
    'no_telp' => [
    'type' => 'VARCHAR',
    'constraint' => '100',
    ],
    'email' => [
    'type' => 'VARCHAR',
    'constraint' => '100',
    ],
    'created_at' => [
    'type' => 'DATETIME',
    'null' => true,
    ],
    'updated_at' => [
    'type' => 'DATETIME',
    'null' => true,
    ]
    ]);
    $this->forge->addPrimaryKey('Kode_Buku');
    $this->forge->createTable('Peminjaman');
    }
    //--------------------------------------------------------------------
    public function down()
    {
    $this->forge->dropTable('Peminjaman');
}
}