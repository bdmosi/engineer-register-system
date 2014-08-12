<?php
/* @var $this EmploymentController */
/* @var $model Employment */
?>

<?php
$this->breadcrumbs=array(
	'Employments'=>array('index'),
	$model->id,
);
//
//$this->menu=array(
//	array('label'=>'List Employment', 'url'=>array('index')),
//	array('label'=>'Create Employment', 'url'=>array('create')),
//	array('label'=>'Update Employment', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Employment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Employment', 'url'=>array('admin')),
//);
?>

<h1>View Employment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'occupation',
		'employer',
		'location',
		'position',
		'personinfo_ref_no',
	),
)); ?>