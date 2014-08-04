<?php
/* @var $this ExperienceController */
/* @var $model Experience */
?>

<?php
$this->breadcrumbs=array(
	'Experiences'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Experience', 'url'=>array('index')),
	array('label'=>'Create Experience', 'url'=>array('create')),
	array('label'=>'Update Experience', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Experience', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Experience', 'url'=>array('admin')),
);
?>

<h1>View Experience #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'expertize',
		'experience_years',
		'experience_country',
		'personinfo_ref_no',
	),
)); ?>