<?php
/* @var $this UserController */
/* @var $model User */
?>

<?php
$this->breadcrumbs=array(
	'Users'=>array('personinfo/create'),
	'Create',
);

        /*
             $this->menu=array(
                         array('label'=>'List User', 'url'=>array('index')),
                         array('label'=>'Manage User', 'url'=>array('admin')),
        );

         */
?>

<h1>Sign up</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>