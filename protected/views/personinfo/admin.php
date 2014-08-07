<?php
/* @var $this PersoninfoController */
/* @var $model Personinfo */


$this->breadcrumbs=array(
	'Personinfos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Personinfo', 'url'=>array('index')),
	array('label'=>'Create Personinfo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personinfo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Personal information</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'personinfo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ref_no',
		'surname',
		'fname',
		'sname',
		'dob',
		'place_birth',
		'nationality',
		/*
                'photo',
		'house_tel',
		'office_tel',
		'mobile',
		'sex_id',
		'marital_status_id',
		'erb_id',
            */
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>