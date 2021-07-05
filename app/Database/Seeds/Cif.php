<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Cif extends Seeder
{
	public function run()
	{
		$data = [
			[
				'kd_id'	=> '101',
				'nama'	=> 'Wahyu',
				'alamat' => 'Jl. Teluk Grajakan',
				'jk'	=>	'male',
				'status'	=> 'no',
				'no_telp'	=> '083848261647'
			],
			[
				'kd_id'	=> '102',
				'nama'	=> 'Bayu',
				'alamat' => 'Jl. Ampera',
				'jk'	=>	'male',
				'status'	=> 'no',
				'no_telp'	=> '081901253123'
			],
			[
				'kd_id'	=> '103',
				'nama'	=> 'Ari',
				'alamat' => 'Jl. Blimbing',
				'jk'	=>	'female',
				'status'	=> 'no',
				'no_telp'	=> '089216202134'
			],

		];
		$this->db->table('cif')->insertBatch($data);
	}
}
