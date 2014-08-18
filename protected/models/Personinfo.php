<?php

/**
 * This is the model class for table "tbl_personinfo".
 *
 * The followings are the available columns in table 'tbl_personinfo':
 * @property integer $ref_no
 * @property string $surname
 * @property string $fname
 * @property string $sname
 * @property string $dob
 * @property string $place_birth
 * @property string $nationality
 * @property string $photo
 * @property string $house_tel
 * @property string $office_tel
 * @property string $mobile
 * @property integer $erb_id
 * @property integer $sex_id
 * @property integer $marital_status_id
 * The followings are the available model relations:
 * @property Academic[] $academics
 * @property Employment[] $employments
 * @property Experience[] $experiences
 * @property PersonMembership[] $personMemberships
 * @property Sex $sex
 * @property MaritalStatus $MaritalStatus
 * @property Erb $erb
 * @property Recomendation[] $recomendations
 */
class Personinfo extends CActiveRecord
{
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_personinfo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('surname, fname, sname, dob, place_birth, nationality, house_tel, office_tel, mobile', 'required','on'=>'update'),
			array('sex_id, marital_status_id,erb_id', 'numerical', 'integerOnly'=>true),
			array('surname, fname, sname, place_birth, nationality, photo, house_tel, office_tel, mobile', 'length', 'max'=>255,'on'=>'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ref_no, surname, fname, dob, place_birth, nationality, photo, house_tel, office_tel, mobile, sex_id, erb_id, sex_id, marital_status_id, erb_id', 'safe', 'on'=>'search'),
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
                        'academics' => array(self::HAS_MANY, 'Academic', 'personinfo_ref_no'),
			'employments' => array(self::HAS_MANY, 'Employment', 'personinfo_ref_no'),
			'experiences' => array(self::HAS_MANY, 'Experience', 'personinfo_ref_no'),
			'personMemberships' => array(self::HAS_MANY, 'PersonMembership', 'personinfo_ref_no'),
			'sex' => array(self::BELONGS_TO, 'Sex', 'sex_id'),
			'maritalStatus' => array(self::BELONGS_TO, 'MaritalStatus', 'marital_status_id'),
			'erb' => array(self::BELONGS_TO, 'Erb', 'erb_id'),
			'recomendations' => array(self::HAS_MANY, 'Recomendation', 'personinfo_ref_no'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ref_no' => 'Ref No',
			'surname' => 'Surname',
			'fname' => 'First Name',
			'sname' => 'Second Name',
			'dob' => 'Date of Birth',
			'place_birth' => 'Place of Birth',
			'nationality' => 'Nationality',
			'photo' => 'Photo url',
			'house_tel' => 'House Telephone',
			'office_tel' => 'Office Telephone',
			'mobile' => 'Mobile Number',
			'sex_id' => 'Sex',
			'erb_id' => 'Erb',
			'sex_id' => 'Sex',
			'marital_status_id' => 'Marital Status',
			'erb_id' => 'Engineer Registration Board',
                        //'academic_type_id' => ' Academic Type',

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

		$criteria->compare('ref_no',$this->ref_no);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('sname',$this->sname,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('place_birth',$this->place_birth,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('house_tel',$this->house_tel,true);
		$criteria->compare('office_tel',$this->office_tel,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('sex_id',$this->sex_id);
		$criteria->compare('marital_status_id',$this->marital_status_id);
		$criteria->compare('erb_id',$this->erb_id);
		//$criteria->compare('academic_type_id',$this->academic_type_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personinfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
