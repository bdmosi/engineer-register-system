<?php
/* @var $this ErbController */
/* @var $model Erb */
?>

<?php
$this->breadcrumbs=array(
	'Erbs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Erb', 'url'=>array('index')),
	array('label'=>'Create Erb', 'url'=>array('create')),
	array('label'=>'Update Erb', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Erb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Erb', 'url'=>array('admin')),
);
?>

<h1>View Erb #<?php echo $model->id; ?></h1>

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