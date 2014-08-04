<?php
/* @var $this EmploymentController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Employments',
);

$this->menu=array(
	array('label'=>'Create Employment','url'=>array('create')),
	array('label'=>'Manage Employment','url'=>array('admin')),
);
?>

<h1>Employments</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>