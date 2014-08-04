<?php
/* @var $this AcademicTypeController */
/* @var $model AcademicType */
?>

<?php
$this->breadcrumbs=array(
	'Academic Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AcademicType', 'url'=>array('index')),
	array('label'=>'Create AcademicType', 'url'=>array('create')),
	array('label'=>'Update AcademicType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AcademicType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AcademicType', 'url'=>array('admin')),
);
?>

<h1>View AcademicType #<?php echo $model->id; ?></h1>

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