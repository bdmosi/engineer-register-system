<?php
/* @var $this PersoninfoController */
/* @var $model Personinfo */
?>

<?php
$this->breadcrumbs=array(
	'Personinfos'=>array('index'),
	$model->ref_no,
);

$this->menu=array(
	array('label'=>'List Personinfo', 'url'=>array('index')),
	array('label'=>'Create Personinfo', 'url'=>array('create')),
	array('label'=>'Update Personinfo', 'url'=>array('update', 'id'=>$model->ref_no)),
	array('label'=>'Delete Personinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ref_no),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personinfo', 'url'=>array('admin')),
);
?>

<h1>View Personinfo #<?php echo $model->ref_no; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'ref_no',
		'surname',
		'fname',
		'sname',
		'dob',
		'place_birth',
		'nationality',
		'photo',
		'house_tel',
		'office_tel',
		'mobile',
		'sex_id',
		'marital_status_id',
		'erb_id',
	),
)); ?>