<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kejadian extends Migration
{
    public function up()
    {
        // Table structure for table 'kejadian'
        $this->forge->addField(
            array(
                'no' => array(
                    'type' => 'INT',
                    'constraint' => 3,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'tanggal_kejadian' => array(
                    'type' => 'DATE',
                ),
                'pelapor' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ),

                'tempat_kejadian' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => TRUE,
                ),
                'jenis_kejadian' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => TRUE,
                ),
                'petugas' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => TRUE,
                ),
                'penyebab' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => TRUE,
                ),
                'akibat' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => TRUE,
                ),
                'kerugian' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => TRUE,
                ),
                'solusi' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => TRUE,
                ),
                'hasil' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => TRUE,
                ),
                'keterangan' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => TRUE,
                ),
            )
        );
        $this->forge->addKey('no', TRUE);
        $this->forge->createTable('kejadian');
    }

    public function down()
    {
        $this->forge->dropTable('kejadian');
    }
}
