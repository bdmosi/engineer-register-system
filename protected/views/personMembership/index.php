<?php
/* @var $this PersonMembershipController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Person Memberships',
);

$this->menu=array(
	array('label'=>'Create PersonMembership','url'=>array('create')),
	array('label'=>'Manage PersonMembership','url'=>array('admin')),
);
?>

<h1>Person Memberships</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>