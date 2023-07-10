<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrder extends Migration
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
			'client_id'       => [
				'type'       => 'INT',
				'unsigned' => true,
			],
			'document_id'       => [
				'type'       => 'INT',

			],
			'item_name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'connfirmation_date'       => [
				'type'       => 'DATETIME',

			],
			'delivery_date'       => [
				'type'       => 'DATETIME',

			],
			'quantity'       => [
				'type'       => 'BIGINT',

			],
			'rate_per_unit'       => [
				'type'       => 'BIGINT',

			],
			'extra_charges'       => [
				'type'       => 'BIGINT',

			],
			'total_amount'       => [
				'type'       => 'BIGINT',

			],
			'status'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'created_date'       => [
				'type'       => 'DATETIME',

			],
			'updated_date'       => [
				'type'       => 'DATETIME',

			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('client_id', 'client', 'id');
		$this->forge->createTable('order');
	}

	public function down()
	{
		$this->forge->dropTable('order');
	}
}