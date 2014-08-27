<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PasswordRecoveryForm
 *
 * @author mosi
 */
class PasswordRecoveryForm extends CFormModel{
    //put your code here
    public $email;
    
    public function rules(){
        return array(
            array('email','emailExists'),
        );
    }
    
    
    public  function attributeLabels(){
        return array(
            'email'=>'Email'
        );
    }
    
    public function  emailExists(){
       $model = User::model()->findByEmail($this->email);
       if($model)
        return true;
       
       $this->addError('email','Email doesn\'t exist');
       return false;
    }
}
