<?php
/* @var $this MaritalStatusController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Marital Statuses',
);

$this->menu=array(
	array('label'=>'Create MaritalStatus','url'=>array('create')),
	array('label'=>'Manage MaritalStatus','url'=>array('admin')),
);
?>

<h1>Marital Statuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>