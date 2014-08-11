<?php
/* @var $this PersonMembershipController */
/* @var $model PersonMembership */
?>

<?php
$this->breadcrumbs=array(
	'Person Memberships'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PersonMembership', 'url'=>array('index')),
	array('label'=>'Create PersonMembership', 'url'=>array('create')),
	array('label'=>'View PersonMembership', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PersonMembership', 'url'=>array('admin')),
);
?>

    <h1>Update PersonMembership <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>