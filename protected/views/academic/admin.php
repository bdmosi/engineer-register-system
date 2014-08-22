<?php
/* @var $this AcademicController */
/* @var $model Academic */


$this->breadcrumbs=array(
	'Academics'=>array('index'),
	'Manage',
);          
            
         /*
            $this->menu=array(
                    array('label'=>'List Academic', 'url'=>array('index')),
                    array('label'=>'Create Academic', 'url'=>array('create')),
            );
             
         */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#academic-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Academics</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView',array(
	'id'=>'academic-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'university_name',
		'personinfo_ref_no',
		//'academic_type_id',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>