<?php
/* @var $this SexController */
/* @var $model Sex */
?>

<?php
$this->breadcrumbs=array(
	'Sexes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sex', 'url'=>array('index')),
	array('label'=>'Manage Sex', 'url'=>array('admin')),
);
?>

<h1>Create Sex</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>