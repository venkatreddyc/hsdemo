<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_property extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'pid' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'property_username' => array(
				'type' => 'VARCHAR',
				'constraint' => 25,
				
			),
			'property_address' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				
			),
			'property_location' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				
			),
			'property_info' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				
			),
			'property_file' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				
			),
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('pid', true);
		$this->dbforge->create_table('property');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('property');

	}

	//--------------------------------------------------------------------

}