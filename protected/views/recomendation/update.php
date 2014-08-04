<?php
/* @var $this RecomendationController */
/* @var $model Recomendation */
?>

<?php
$this->breadcrumbs=array(
	'Recomendations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Recomendation', 'url'=>array('index')),
	array('label'=>'Create Recomendation', 'url'=>array('create')),
	array('label'=>'View Recomendation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Recomendation', 'url'=>array('admin')),
);
?>

    <h1>Update Recomendation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>