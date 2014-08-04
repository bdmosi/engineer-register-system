<?php
/* @var $this SexController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Sexes',
);

$this->menu=array(
	array('label'=>'Create Sex','url'=>array('create')),
	array('label'=>'Manage Sex','url'=>array('admin')),
);
?>

<h1>Sexes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>