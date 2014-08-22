<?php

/**
 * This is the model class for table "tbl_experience".
 *
 * The followings are the available columns in table 'tbl_experience':
 * @property integer $id
 * @property string $expertize
 * @property integer $experience_years
 * @property string $experience_country
 * @property integer $personinfo_ref_no
 *
 * The followings are the available model relations:
 * @property Personinfo $tblPersoninfoRefNo
 */
class Experience extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_experience';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('expertize, experience_years, experience_country, personinfo_ref_no', 'required'),
			array('experience_years, personinfo_ref_no', 'numerical', 'integerOnly'=>true),
			array('expertize, experience_country', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, expertize, experience_years, experience_country, personinfo_ref_no', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'expertize' => 'Expertize',
			'experience_years' => 'Experience Years',
			'experience_country' => 'Experience Country',
			'personinfo_ref_no' => ' Personinfo Ref No',
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
		$criteria->compare('expertize',$this->expertize,true);
		$criteria->compare('experience_years',$this->experience_years);
		$criteria->compare('experience_country',$this->experience_country,true);
		$criteria->compare('personinfo_ref_no',$this->personinfo_ref_no);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Experience the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
