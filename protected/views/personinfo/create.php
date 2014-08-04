<?php
/* @var $this PersoninfoController */
/* @var $model Personinfo */
?>

<?php
$this->breadcrumbs=array(
	'Personinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Personinfo', 'url'=>array('index')),
	array('label'=>'Manage Personinfo', 'url'=>array('admin')),
);
?>

<h1>Create Personinfo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>