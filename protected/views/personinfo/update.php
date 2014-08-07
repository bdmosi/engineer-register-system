<?php
/* @var $this PersoninfoController */
/* @var $model Personinfo */
?>

<?php
$this->breadcrumbs=array(
	'Personinfos'=>array('index'),
	$model->ref_no=>array('view','id'=>$model->ref_no),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personinfo', 'url'=>array('index')),
	//array('label'=>'Create Personinfo', 'url'=>array('create')),
	array('label'=>'View Personinfo', 'url'=>array('view', 'id'=>$model->ref_no)),
	//array('label'=>'Manage Personinfo', 'url'=>array('admin')),
);
?>

    <h1>Update Personinfo <?php echo $model->ref_no; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>