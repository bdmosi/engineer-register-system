<?php
/* @var $this PersonMembershipController */
/* @var $model PersonMembership */
?>

<?php
$this->breadcrumbs=array(
	'Person Memberships'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PersonMembership', 'url'=>array('index')),
	array('label'=>'Create PersonMembership', 'url'=>array('create')),
	array('label'=>'Update PersonMembership', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PersonMembership', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PersonMembership', 'url'=>array('admin')),
);
?>

<h1>View PersonMembership #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'personinfo_ref_no',
		'membership_id',
	),
)); ?>