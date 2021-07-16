<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'nik' => [
				'type'	=> 'INT',
				'constraint'	=> '20',
				'unsigned'		=> TRUE
			],
			'nama' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '255'
			],
			'tl' => [
				'type'	=> 'DATE',
			],
			'kota_lahir' => [
				'type'	=> 'CHAR',
				'constraint'	=> '50'
			],
			'alamat_ktp' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '255'
			],
			'kota_ktp' => [
				'type'	=> 'CHAR',
				'constraint'	=> '50'
			],
			'alamat_sekarang' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '50'
			],
			'kota_sekarang' => [
				'type'	=> 'CHAR',
				'constraint'	=> '50'
			],
			'jk' => [
				'type'	=> 'ENUM',
				'constraint'	=> ['male', 'female'],
				'default'		=> 'male'
			],
			'status' => [
				'type'	=> 'ENUM',
				'constraint'	=> ['yes', 'no'],
				'default'		=> 'no'
			],
			'password' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '255'
			],
			'jabatan' => [
				'type'	=> 'ENUM',
				'constraint'	=> ['admin', 'teller', 'cs', 'manajer', 'guest'],
				'default'		=> 'guest'
			],
			'tgl_dibuat' => [
				'type'	=> 'DATETIME'
			],
			'tgl_diupdate' => [
				'type'	=> 'DATETIME'
			]
		]);
		$this->forge->addKey('nik', true);
		$this->forge->createTable('karyawan');
	}

	public function down()
	{
		//
	}
}
