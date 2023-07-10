<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClient extends Migration
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
			'company_name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'company_mobile'       => [
				'type'       => 'BIGINT',

			],
			'company_email'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'contact_name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'contact_mobile'       => [
				'type'       => 'BIGINT',

			],
			'contact_email'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'token'       => [
				'type'       => 'VARCHAR',
				'constraint' => '1000',
			],
			'addressline1'       => [
				'type'       => 'VARCHAR',
				'constraint' => '500',
			],
			'addressline2'       => [
				'type'       => 'VARCHAR',
				'constraint' => '500',
			],
			'city'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'state'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'country'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'pincode'       => [
				'type'       => 'BIGINT',
			],
			'deleted'       => [
				'type'       => 'INT',
				'default' => 0,
				'comment' => '0 means Not Deleted'
			],
			'created_date'       => [
				'type'       => 'DATETIME',

			],
			'updated_date'       => [
				'type'       => 'DATETIME',

			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('client');
	}

	public function down()
	{
		$this->forge->dropTable('client');
	}
}