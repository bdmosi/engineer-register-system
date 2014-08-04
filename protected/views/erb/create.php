<?php
/* @var $this ErbController */
/* @var $model Erb */
?>

<?php
$this->breadcrumbs=array(
	'Erbs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Erb', 'url'=>array('index')),
	array('label'=>'Manage Erb', 'url'=>array('admin')),
);
?>

<h1>Create Erb</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>