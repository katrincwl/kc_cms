<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_install_news extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
                ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                ),
            'content' => array(
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
                ),
            'publish_date' => array(
                'type' => 'DATETIME')
            ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('news');


        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
                ),
            'nid' => array(
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
        $this->dbforge->create_table('news_images');
    }

    public function down()
    {
        $this->dbforge->drop_table('news');
    }
}