<?php
/* @var $this ExperienceController */
/* @var $model Experience */


$this->breadcrumbs=array(
	'Experiences'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Experience', 'url'=>array('index')),
	array('label'=>'Create Experience', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#experience-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Experiences</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView',array(
	'id'=>'experience-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'expertize',
		'experience_years',
		'experience_country',
		'personinfo_ref_no',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>