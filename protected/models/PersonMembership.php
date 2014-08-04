<?php

/**
 * This is the model class for table "tbl_person_membership".
 *
 * The followings are the available columns in table 'tbl_person_membership':
 * @property integer $id
 * @property integer $membership_id
 * @property integer $tbl_personinfo_ref_no
 * @property integer $tbl_membership_id
 *
 * The followings are the available model relations:
 * @property Personinfo $tblPersoninfoRefNo
 * @property Membership $tblMembership
 */
class PersonMembership extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_person_membership';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('membership_id, personinfo_ref_no, membership_id', 'required'),
			array('membership_id, personinfo_ref_no, membership_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, membership_id, personinfo_ref_no, membership_id', 'safe', 'on'=>'search'),
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
			'PersoninfoRefNo' => array(self::BELONGS_TO, 'Personinfo', 'personinfo_ref_no'),
			'Membership' => array(self::BELONGS_TO, 'Membership', 'membership_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'membership_id' => 'Membership',
			'personinfo_ref_no' => 'Personinfo Ref No',
			'membership_id' => 'Membership',
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
		$criteria->compare('membership_id',$this->membership_id);
		$criteria->compare('personinfo_ref_no',$this->personinfo_ref_no);
		$criteria->compare('membership_id',$this->membership_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PersonMembership the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
