<?php
/* @var $this PersoninfoController */
/* @var $model Personinfo */


$this->breadcrumbs=array(
	'Personinfos'=>array('index'),
	'Manage',
);

//$this->menu=array(
	//array('label'=>'List Personinfo', 'url'=>array('index')),
	//array('label'=>'Create Personinfo', 'url'=>array('create')),
//);

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

    <!-----$this->widget('bootstrap.widgets.TbGridView',array(----->
        
    <?php $this->widget('zii.widgets.grid.CGridView', array(

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
                //'photo',
		'house_tel',
		'office_tel',
		'mobile',
                array(
                    'name'=>'sex_id',
                    'value'=>$model->sex->description
                ),
		array(
                    'name'=>'marital_status_id',
                    'value'=>$model->maritalStatus->description
                   ),
            
		array('name'=>'erb_id',
                     'value'=>$model->erb->description
                     ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>