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

<h1>Manage Personinfos</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

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
		/*
		'nationality',
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