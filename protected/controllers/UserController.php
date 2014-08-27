<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
        {
            return array(
               array('deny',
                    'actions'=>array('create'),
                    'users'=>array('@')
            ),
                array('allow', // allow all users to perform 'index' and 'view' actions
                        'actions'=>array('index','view','create','recovery'),
                        'users'=>array('*'),
                    ),
                array('allow', // allow authenticated user to perform 'create' and 'update' actions
                        'actions'=>array('update','changepassword'),
                        'users'=>array('@'),
             ),
                array('allow', // allow admin user to perform 'admin' and 'delete' actions
                        'actions'=>array('admin','delete'),
                        'users'=>array('admin'),
             ),
                array('deny', // deny all users
                'users'=>array('*'),
                 ),
           );
        }


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['User'])) 
                 {
                        $model->attributes=$_POST['User'];
                          $model->username = $model->email;
                            $model->password = $model->hashPassword($model->password);
                     if ($model->save()) 
                      {
                          $profile = new Personinfo();
                           $profile->ref_no = $model->id;
                         if($profile->save())
                          {
                            $this->redirect(array('personinfo/update','id'=>$model->id));
                            //$user->loginCounter = 0;

                            //$this->redirect(Yii::app()->homeUrl);
                           }
                       }
                 }
                    $this->render('create',array(
                    'model'=>$model,
                    ));
       }

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['User'])) {
			$model->attributes=$_POST['User'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}
		} else {
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['User'])) {
			$model->attributes=$_GET['User'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        public function actionChangepassword($id)
        {      
           $model = new User('ChangePwd');               
 
            if(isset($_POST['User']))
              {
               $model = User::model()->findByAttributes(array('id'=>$id));
                $model->setScenario('changePwd');
                    $model->attributes = $_POST['User'];
                    $valid = $model->validate();
 
                if($valid){
 
                      //$model->password = hashPassword($model->new_password);
                      $model->password = User::model()->hashPassword($model->new_password);
 
                  if ($model->save()) {
                    $msg = 'successfully changed password';
                    //$this->redirect(array('changepassword', 'msg' => 'successfully changed password'));
                    } else {
                      $msg = 'password not changed';
                    //$this->redirect(array('changepassword', 'msg' => 'password not changed'));
                   }
            }
          }
 
              $this->render('changepassword',array('model'=>$model,'msg'=> $msg)); 
      }

      
      public function actionRecovery(){ 
          
              $model = new PasswordRecoveryForm();
              
              if(isset($_POST['PasswordRecoveryForm'])){
                  $model->attributes = $_POST['PasswordRecoveryForm'];
                  if($model->validate()){
                     $user = User::model()->findByEmail($model->email);
                     $newPassword = uniqid();
                     $user->password = $user->hashPassword($newPassword);
                     if($user->save()){
                         Yii::app()->user->setFlash('recoveryMessage',"Your new password is {$newPassword}");
                     }else{
                         Yii::app()->user->setFlash('recoveryMessage',"Password reset failed.");
                     
                     }
                     
                  }
              }

              $this->render('recovery',array('model'=>$model)); 
      }
      
      
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='user-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}