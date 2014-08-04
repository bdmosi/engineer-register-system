<?php
/* @var $this SexController */
/* @var $model Sex */
?>

<?php
$this->breadcrumbs=array(
	'Sexes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sex', 'url'=>array('index')),
	array('label'=>'Create Sex', 'url'=>array('create')),
	array('label'=>'Update Sex', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sex', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sex', 'url'=>array('admin')),
);
?>

<h1>View Sex #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'description',
	),
)); ?>