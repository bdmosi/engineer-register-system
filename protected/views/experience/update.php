<?php
/* @var $this ExperienceController */
/* @var $model Experience */
?>

<?php
$this->breadcrumbs=array(
	'Experiences'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Experience', 'url'=>array('index')),
	array('label'=>'Create Experience', 'url'=>array('create')),
	array('label'=>'View Experience', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Experience', 'url'=>array('admin')),
);
?>

    <h1>Update Experience <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>