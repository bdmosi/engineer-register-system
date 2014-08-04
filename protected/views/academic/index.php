<?php
/* @var $this AcademicController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Academics',
);

$this->menu=array(
	array('label'=>'Create Academic','url'=>array('create')),
	array('label'=>'Manage Academic','url'=>array('admin')),
);
?>

<h1>Academics</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>