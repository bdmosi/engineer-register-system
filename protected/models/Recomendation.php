<?php

/**
 * This is the model class for table "tbl_recomendation".
 *
 * The followings are the available columns in table 'tbl_recomendation':
 * @property integer $id
 * @property string $referee_name
 * @property string $referee_email
 * @property string $address
 * @property integer $tbl_personinfo_ref_no
 *
 * The followings are the available model relations:
 * @property Personinfo $tblPersoninfoRefNo
 */
class Recomendation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_recomendation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('referee_name, referee_email, address,personinfo_ref_no', 'required'),
			array('personinfo_ref_no', 'numerical', 'integerOnly'=>true),
			array('referee_name, referee_email, address', 'length', 'max'=>255),
                        array('referee_email','match','pattern'=>'/[a-zA-Z0-9_.+]+@[a-zA-Z0-9]+.[a-zA-Z]+/','message'=>'Invalid email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, referee_name, referee_email, address,personinfo_ref_no', 'safe', 'on'=>'search'),
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
			'referee_name' => 'Referee Name',
			'referee_email' => 'Referee Email',
			'address' => 'Address',
			'personinfo_ref_no' => 'Personinfo Ref No',
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
		$criteria->compare('referee_name',$this->referee_name,true);
		$criteria->compare('referee_email',$this->referee_email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('personinfo_ref_no',$this->personinfo_ref_no);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Recomendation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
