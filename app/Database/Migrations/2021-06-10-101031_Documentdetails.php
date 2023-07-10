<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Documentdetails extends Migration
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
			'order_id'          => [
				'type'           => 'INT',
				'unsigned' => true,
			],
			'file_path' => [
				'type' => 'VARCHAR',
				'constraint' => '1000'

			],
			'file_name' => [
				'type' => 'VARCHAR',
				'constraint' => '200'

			],
			'created_date'       => [
				'type'       => 'DATETIME',

			],
			'updated_date'       => [
				'type'       => 'DATETIME',

			],

		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('order_id', 'order', 'id');
		$this->forge->createTable('orderdocs');
	}

	public function down()
	{
		$this->forge->dropTable('orderdocs');
	}
}