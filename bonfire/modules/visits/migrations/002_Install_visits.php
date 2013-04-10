<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_visits extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'vid' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'visits_pid' => array(
				'type' => 'VARCHAR',
				'constraint' => 11,
				
			),
			'visits_date' => array(
				'type' => 'DATE',
				'default' => '0000-00-00',
				
			),
			'visits_pinfo' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				
			),
			'visits_file' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				
			),
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('vid', true);
		$this->dbforge->create_table('visits');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('visits');

	}

	//--------------------------------------------------------------------

}