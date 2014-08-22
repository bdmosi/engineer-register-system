<?php
/* @var $this EmploymentController */
/* @var $model Employment */


$this->breadcrumbs=array(
	'Employments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Employment', 'url'=>array('index')),
	array('label'=>'Create Employment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#employment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employments</h1>

    <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<!--------$this->widget('bootstrap.widgets.TbGridView'--------->

<?php $this->widget('zii.widgets.grid.CGridView',array(
	'id'=>'employment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'occupation',
		'employer',
		'location',
		'position',
		//'personinfo_ref_no',
		
		'date_from',
		'date_to',
	
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>