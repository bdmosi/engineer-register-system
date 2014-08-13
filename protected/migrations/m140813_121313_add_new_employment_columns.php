<?php

class m140813_121313_add_new_employment_columns extends CDbMigration
{
	public function up()
	{
            Yii::app()->db->createCommand()
                    ->addColumn('tbl_employment',
                            'date_from'
                            ,'DATETIME');
            Yii::app()->db->createCommand()
                    ->addColumn('tbl_employment',
                            'date_to'
                            ,'DATETIME');
	}

	public function down()
	{
		echo "m140813_121313_add_new_employment_columns does not support migration down.\n";
		return false;
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