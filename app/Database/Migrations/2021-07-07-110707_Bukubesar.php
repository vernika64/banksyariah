<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bukubesar extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'kd_akun'			=> [
				'type'			=> 'CHAR',
				'constraint'	=> 20
			],
			'nama_akun'			=> [
				'type'			=> 'CHAR',
				'constraint'	=> 50
			],
			'debet'				=> [
				'type'			=> 'INT',
				'constraint'	=> 20
			],
			'kredit'			=> [
				'type'			=> 'INT',
				'constraint'	=> 20
			],
			'tgl_dibuat'		=> [
				'type'			=> 'DATETIME'
			],
			'tgl_update'		=> [
				'type'			=> 'DATETIME'
			]
		]);
		$this->forge->addKey('kd_akun', true);
		$this->forge->createTable('bukubesar');
	}

	public function down()
	{
		//
	}
}
