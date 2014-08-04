<?php
/* @var $this SexController */
/* @var $model Sex */
?>

<?php
$this->breadcrumbs=array(
	'Sexes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sex', 'url'=>array('index')),
	array('label'=>'Create Sex', 'url'=>array('create')),
	array('label'=>'View Sex', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sex', 'url'=>array('admin')),
);
?>

    <h1>Update Sex <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>