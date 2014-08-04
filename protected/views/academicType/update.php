<?php
/* @var $this AcademicTypeController */
/* @var $model AcademicType */
?>

<?php
$this->breadcrumbs=array(
	'Academic Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AcademicType', 'url'=>array('index')),
	array('label'=>'Create AcademicType', 'url'=>array('create')),
	array('label'=>'View AcademicType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AcademicType', 'url'=>array('admin')),
);
?>

    <h1>Update AcademicType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>