<?php
/* @var $this AcademicTypeController */
/* @var $model AcademicType */
?>

<?php
$this->breadcrumbs=array(
	'Academic Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AcademicType', 'url'=>array('index')),
	array('label'=>'Manage AcademicType', 'url'=>array('admin')),
);
?>

<h1>Create AcademicType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>