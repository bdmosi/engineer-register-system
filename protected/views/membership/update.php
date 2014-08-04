<?php
/* @var $this MembershipController */
/* @var $model Membership */
?>

<?php
$this->breadcrumbs=array(
	'Memberships'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Membership', 'url'=>array('index')),
	array('label'=>'Create Membership', 'url'=>array('create')),
	array('label'=>'View Membership', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Membership', 'url'=>array('admin')),
);
?>

    <h1>Update Membership <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>