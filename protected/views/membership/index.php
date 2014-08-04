<?php
/* @var $this MembershipController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Memberships',
);

$this->menu=array(
	array('label'=>'Create Membership','url'=>array('create')),
	array('label'=>'Manage Membership','url'=>array('admin')),
);
?>

<h1>Memberships</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>