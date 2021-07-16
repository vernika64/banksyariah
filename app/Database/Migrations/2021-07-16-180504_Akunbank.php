<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Akunbank extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'kd_akun'	=> [
				'type'			=> 'INT',
				'constraint'	=> 20,
				'unsigned'		=> TRUE
			],
			'username'	=> [
				'type'			=> 'CHAR',
				'constraint'	=> 10
			],
			'password'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'role'		=> [
				'type'			=> 'ENUM',
				'constraint'	=> ['ADMIN', 'CS', 'TL', 'SPV'],
				'default'		=> 'CS'
			],
			'tgl_dibuat'	=> [
				'type'			=> 'DATETIME'
			],
			'tgl_diupdate'	=> [
				'type'			=> 'DATETIME'
			]
		]);
	}

	public function down()
	{
		//
	}
}
