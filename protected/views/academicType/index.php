<?php
/* @var $this AcademicTypeController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Academic Types',
);

$this->menu=array(
	array('label'=>'Create AcademicType','url'=>array('create')),
	array('label'=>'Manage AcademicType','url'=>array('admin')),
);
?>

<h1>Academic Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>