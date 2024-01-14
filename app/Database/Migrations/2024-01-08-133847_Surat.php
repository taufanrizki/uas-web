<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Surat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'No' => [
                'type' => 'INT',
                'constraint' => 3,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Tanggal_Kirim_Surat' => [
                'type' => 'DATE',
            ],
            'Nomor_Kirim_Surat' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'Perihal' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true,
            ],
            'Tujuan_Surat' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'Tanda_Tangan_Penerima' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true,
            ],
            'Keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ]);

        // Menambahkan primary key secara terpisah
        $this->forge->addKey('No', true);

        $this->forge->createTable('surat', true, ['ENGINE' => 'InnoDB', 'DEFAULT CHARSET' => 'utf8', 'COLLATE' => 'utf8_general_ci']);
    }

    public function down()
    {
        $this->forge->dropTable('surat');
    }
}
