<?php

class m140814_055034_add_new_user_columns extends CDbMigration
{
	public function up()
	{
            
            Yii::app()->db->createCommand()
                    ->addColumn('tbl_user',
                            'status'
                            ,'VARCHAR(20)');
            Yii::app()->db->createCommand()
                    ->addColumn('tbl_user',
                            'lastlogin'
                            ,'TIMESTAMP');
            Yii::app()->db->createCommand()
                    ->addColumn('tbl_user',
                            'loginCounter'
                            ,'INTEGER');
	}

	public function down()
	{
		echo "m140814_055034_add_new_user_columns does not support migration down.\n";
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