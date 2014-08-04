<?php
/* @var $this RecomendationController */
/* @var $model Recomendation */
?>

<?php
$this->breadcrumbs=array(
	'Recomendations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Recomendation', 'url'=>array('index')),
	array('label'=>'Manage Recomendation', 'url'=>array('admin')),
);
?>

<h1>Create Recomendation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>