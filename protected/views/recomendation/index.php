<?php
/* @var $this RecomendationController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Recomendations',
);

$this->menu=array(
	array('label'=>'Create Recomendation','url'=>array('create')),
	array('label'=>'Manage Recomendation','url'=>array('admin')),
);
?>

<h1>Recomendations</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>