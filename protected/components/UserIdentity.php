<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
        private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$username=strtolower($this->username);
	        $user=User::model()->find('LOWER(username)=?',array($username));
               // echo '<pre>';print_r($user);die('Duuuuh');
                
	     if($user===null)
		  $this->errorCode=self::ERROR_USERNAME_INVALID;
	     else if(!$user->validatePassword($this->password))
      	          $this->errorCode=self::ERROR_PASSWORD_INVALID;

	     else{
		    $this->_id=$user->id;
		    $this->username=$user->username;
		    $this->errorCode=self::ERROR_NONE;
                    Yii::app()->user->setState('user_id',$user->id);
                    if($user->status == 1){
                     Yii::app()->user->setState('active',True); 
                    }
                    else
                    {
                     Yii::app()->user->setState('inactive',True); 
                    }
		}
	   return $this->errorCode==self::ERROR_NONE;
	}
        
        public function getId()
        {
         
            return $this->_id;
            
        }
}