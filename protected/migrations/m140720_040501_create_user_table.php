<?php

class m140720_040501_create_user_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('sin_user', array(
		'id' => 'pk',
		'name_th' => 'string NOT NULL',
		'surname_th' => 'string NOT NULL',
		'name_eng' => 'string NOT NULL',
		'surname_eng' => 'string NOT NULL',
		'gender' => 'int(1) DEFAULT NULL',
		'bd_date' => 'datetime DEFAULT NULL',
		'id_card' => 'string NOT NULL',
		'add_no' => 'string NOT NULL',
		'add_street' => 'string NOT NULL',
		'add_province' => 'string NOT NULL',
		'add_postcode' => 'string NOT NULL',
		'phone_number' => 'string DEFAULT NULL',
		'mobile_number' => 'string DEFAULT NULL',
		'email_address' => 'string DEFAULT NULL',
		'username' => 'string NOT NULL',
		'email' => 'string NOT NULL',
		'password' => 'string NOT NULL',
		'receive_data' => 'int(1) DEFAULT NULL',
		'last_login_time' => 'datetime DEFAULT NULL',
		'create_time' => 'datetime DEFAULT NULL',
		'create_user_id' => 'int(11) DEFAULT NULL',
		'update_time' => 'datetime DEFAULT NULL',
		'update_user_id' => 'int(11) DEFAULT NULL',
		), 'ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('sin_user');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}