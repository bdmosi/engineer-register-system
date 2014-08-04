<?php
/* @var $this ExperienceController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Experiences',
);

$this->menu=array(
	array('label'=>'Create Experience','url'=>array('create')),
	array('label'=>'Manage Experience','url'=>array('admin')),
);
?>

<h1>Experiences</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>