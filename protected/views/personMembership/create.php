<?php
/* @var $this PersonMembershipController */
/* @var $model PersonMembership */
?>

<?php
$this->breadcrumbs=array(
	'Person Memberships'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PersonMembership', 'url'=>array('index')),
	array('label'=>'Manage PersonMembership', 'url'=>array('admin')),
);
?>

<h1>Create PersonMembership</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>