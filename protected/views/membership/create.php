<?php
/* @var $this MembershipController */
/* @var $model Membership */
?>

<?php
$this->breadcrumbs=array(
	'Memberships'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Membership', 'url'=>array('index')),
	array('label'=>'Manage Membership', 'url'=>array('admin')),
);
?>

<h1>Create Membership</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>