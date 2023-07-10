<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAdmin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'email'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'mobile'       => [
				'type'       => 'BIGINT',

			],
			'password'       => [
				'type'       => 'VARCHAR',
				'constraint' => '1000',
			],
			'created_date'       => [
				'type'       => 'DATETIME',

			],
			'updated_date'       => [
				'type'       => 'DATETIME',

			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('admin');
	}

	public function down()
	{
		$this->forge->dropTable('admin');
	}
}