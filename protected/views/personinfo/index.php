<?php
/* @var $this PersoninfoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Personinfos',
);

$this->menu=array(
	array('label'=>'Create Personinfo','url'=>array('create')),
	array('label'=>'Manage Personinfo','url'=>array('admin')),
);
?>

<h1>Personinfos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>