<?php
/* @var $this ErbController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Erbs',
);

$this->menu=array(
	array('label'=>'Create Erb','url'=>array('create')),
	array('label'=>'Manage Erb','url'=>array('admin')),
);
?>

<h1>Erbs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>