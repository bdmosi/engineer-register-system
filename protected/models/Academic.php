<?php

/**
 * This is the model class for table "tbl_academic".
 *
 * The followings are the available columns in table 'tbl_academic':
 * @property integer $id
 * @property integer $academictype_id
 * @property string $university_name
 * @property integer $tbl_personinfo_ref_no
 * @property integer $tbl_academic_type_id
 *
 * The followings are the available model relations:
 * @property Personinfo $tblPersoninfoRefNo
 * @property AcademicType $tblAcademicType
 */
class Academic extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_academic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('academictype_id, university_name, tbl_personinfo_ref_no, tbl_academic_type_id', 'required'),
			array('academictype_id, personinfo_ref_no, academic_type_id', 'numerical', 'integerOnly'=>true),
			array('university_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, academictype_id, university_name, personinfo_ref_no, academic_type_id', 'safe', 'on'=>'search'),
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
			'AcademicType' => array(self::BELONGS_TO, 'AcademicType', 'academic_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'academictype_id' => 'Academictype',
			'university_name' => 'University Name',
			'personinfo_ref_no' => ' Personinfo Ref No',
			'academic_type_id' => ' Academic Type',
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
		$criteria->compare('academictype_id',$this->academictype_id);
		$criteria->compare('university_name',$this->university_name,true);
		$criteria->compare('personinfo_ref_no',$this->personinfo_ref_no);
		$criteria->compare('academic_type_id',$this->academic_type_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Academic the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}