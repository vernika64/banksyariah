<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ciftest extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'kd_id'			=> [
				'type'				=> 'CHAR',
				'constraint'		=> 20
			],
			'nama'					=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'alamat'				=> [
				'type'				=> 'TEXT',
			],
			'jk'					=> [
				'type'				=> 'ENUM',
				'constraint'		=> ['male', 'female'],
				'default'			=> 'male'
			],
			'status'				=> [
				'type'				=> 'ENUM',
				'constraint'		=> ['yes', 'no'],
				'default'			=> 'yes'
			],
			'no_telp'				=> [
				'type'				=> 'CHAR',
				'constraint'		=> 20
			]
		]);

		$this->forge->addKey('kd_id', true);
		$this->forge->createTable('cif');
	}

	public function down()
	{
		//
	}
}
