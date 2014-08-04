<?php
/* @var $this RecomendationController */
/* @var $model Recomendation */
?>

<?php
$this->breadcrumbs=array(
	'Recomendations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Recomendation', 'url'=>array('index')),
	array('label'=>'Create Recomendation', 'url'=>array('create')),
	array('label'=>'Update Recomendation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Recomendation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recomendation', 'url'=>array('admin')),
);
?>

<h1>View Recomendation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'referee_name',
		'referee_email',
		'address',
		'personinfo_ref_no',
	),
)); ?>