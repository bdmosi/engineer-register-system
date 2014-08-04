<?php
/* @var $this ErbController */
/* @var $model Erb */
?>

<?php
$this->breadcrumbs=array(
	'Erbs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Erb', 'url'=>array('index')),
	array('label'=>'Create Erb', 'url'=>array('create')),
	array('label'=>'View Erb', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Erb', 'url'=>array('admin')),
);
?>

    <h1>Update Erb <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>