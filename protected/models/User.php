<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $status
 * @property string $lastlogin
 * @property integer $loginCounter
 */
class User extends CActiveRecord
{
    
    public $confirmPassword;
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, confirmPassword, email', 'required','on' => 'create'),
			array('loginCounter', 'numerical', 'integerOnly'=>true),
			array('username, password,confirmPassword, email', 'length', 'max'=>255),
			array('status', 'length', 'max'=>20),
                        array('email','email'),
                        array('confirmPassword','equalsPassword','on' => 'create'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, confirmPassword, email, status, lastlogin, loginCounter', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'status' => 'Status',
			'lastlogin' => 'Lastlogin',
			'loginCounter' => 'Login Counter',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('lastlogin',$this->lastlogin,true);
		$criteria->compare('loginCounter',$this->loginCounter);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        
        public function validatePassword($password)
	{
            return $this->hashPassword($password) == $this->password;
	}
      
        /*
         *storing a hash password in your database 
         *instead of plain password helping in validating the entered password by user
	 *Through using hashPassword() method	
	*/
	public function hashPassword($password)
        {
            return sha1($password);
	}
               
        public function equalsPassword(){
            //hash password is a dynamic method instances use $this to refer to it
            if($this->hashPassword($this->confirmPassword)==$this->password){
              return true;  
            }
            $this->addError('confirmPassword','Password does not match');
            return false;
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
