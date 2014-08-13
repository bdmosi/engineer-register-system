<?php

/**
 * This is the model class for table "tbl_employment".
 *
 * The followings are the available columns in table 'tbl_employment':
 * @property integer $id
 * @property string $occupation
 * @property string $employer
 * @property string $location
 * @property string $position
 * @property integer $personinfo_ref_no
 * @property string $date_from
 * @property string $date_to
 *
 * The followings are the available model relations:
 * @property Personinfo $personinfoRefNo
 */
class Employment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_employment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('occupation, employer, location, position, personinfo_ref_no', 'required'),
			array('personinfo_ref_no', 'numerical', 'integerOnly'=>true),
			array('occupation, employer, location, position', 'length', 'max'=>255),
			array('date_from, date_to', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, occupation, employer, location, position, personinfo_ref_no, date_from, date_to', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'personinfoRefNo' => array(self::BELONGS_TO, 'Personinfo', 'personinfo_ref_no'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'occupation' => 'Occupation',
			'employer' => 'Employer',
			'location' => 'Location',
			'position' => 'Position',
			'personinfo_ref_no' => 'Personinfo Ref No',
			'date_from' => 'Date From',
			'date_to' => 'Date To',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('employer',$this->employer,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('personinfo_ref_no',$this->personinfo_ref_no);
		$criteria->compare('date_from',$this->date_from,true);
		$criteria->compare('date_to',$this->date_to,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
