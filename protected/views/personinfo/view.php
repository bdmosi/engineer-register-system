<?php
/* @var $this PersoninfoController */
/* @var $model Personinfo */
?>

<?php
$this->breadcrumbs=array(
	'Personinfos'=>array('index'),
	$model->ref_no,
);

$this->menu=array(
	//array('label'=>'List Personinfo', 'url'=>array('index')),
       // array('label'=>'view Personinfo', 'url'=>array('view', 'id'=>$model->ref_no)),
	//array('label'=>'Create Personinfo', 'url'=>array('create')),
	array('label'=>'Update Personinfo', 'url'=>array('update', 'id'=>$model->ref_no)),
	//array('label'=>'Delete Personinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ref_no),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Personinfo', 'url'=>array('admin', 'id'=>$model->ref_no)),
);
?>

<h1>View Personinfo <?php //echo $model->ref_no; ?></h1>
<?php
     if(isset($model->photo))
     echo TbHtml::imagePolaroid(Yii::app()->request->baseUrl."/userfiles/profile_photos/{$model->photo}", 'Profile photo',array('style'=>'width:120px;height:120px'));
     else
     echo TbHtml::imagePolaroid(Yii::app()->request->baseUrl."/userfiles/profile_photos/placeholder.png", 'Profile photo',array('style'=>'width:120px;height:120px'));  
?>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'ref_no',
		'surname',
		'fname',
		'sname',
		'dob',
		'place_birth',
		'nationality',
		'house_tel',
		'office_tel',
		'mobile',
		//'sex_id',
                array(
                    'name'=>'sex_id',
                    'value'=>$model->sex->description
                ),
		//'marital_status_id',
                array(
                    'name'=>'marital_status_id',
                    'value'=> $model->maritalStatus->description
                ),
                        //'erb_id',
                array(
                    'name'=>'erb_id',
                    'value'=> $model->erb->description
                ),
        
	),
)); 
echo TbHtml::link('Edit',$this->createUrl('/Personinfo/update',array('id'=>$model->ref_no)),array('class'=>'btn btn-primary'));
?>