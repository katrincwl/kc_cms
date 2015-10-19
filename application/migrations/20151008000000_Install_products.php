<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_products extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
				),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				),
			'description' => array(
				'type' => 'TEXT',
				'null' => TRUE,
				),
			'created_at' => array(
				'type' => 'DATETIME'
				),
			'created_by' => array(
				'type' => 'INT'
				),
			'updated_at' => array(
				'type' => 'DATETIME'
				),
			'updated_by' => array(
				'type' => 'INT'
				)
			));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('products');

		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
				),
			'pid' => array(
				'type' => 'INT'
				),
			'description' => array(
				'type' => 'TEXT',
				'null' => TRUE,
				),
			'path' => array(
				'type' => 'TEXT'
				),
			'sequence' => array(
				'type' => 'INT'
				),
			'created_at' => array(
				'type' => 'DATETIME'
				),
			'created_by' => array(
				'type' => 'INT'
				)
			));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('product_images');


	}

	public function down() {
		$this->dbforge->drop_table('products');
		$this->dbforge->drop_table('product_images');
	}

}

/* End of file 20151008000000_Install_products.php */
/* Location: ./application/migrations/20151008000000_Install_products.php */