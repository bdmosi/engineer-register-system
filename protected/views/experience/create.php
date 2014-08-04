<?php
/* @var $this ExperienceController */
/* @var $model Experience */
?>

<?php
$this->breadcrumbs=array(
	'Experiences'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Experience', 'url'=>array('index')),
	array('label'=>'Manage Experience', 'url'=>array('admin')),
);
?>

<h1>Create Experience</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>