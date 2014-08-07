<?php
/* @var $this PersoninfoController */
/* @var $data Personinfo */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('ref_no')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ref_no),array('view','id'=>$data->ref_no)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surname')); ?>:</b>
	<?php echo CHtml::encode($data->surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fname')); ?>:</b>
	<?php echo CHtml::encode($data->fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sname')); ?>:</b>
	<?php echo CHtml::encode($data->sname); ?>
	<br />

	<b><?php echo CHtml::activeLabel($model,'dob'); ?>:</b>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                              array(
                                    'model'=>$model,
                                    'attribute'=>'dob',
                                    //'flat'=>true,//remove to hide the datepicker
                                    'options'=>array(
                                        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                                        'showOn'=>both,
                                        'showOtherMonths'=>true,// Show Other month in jquery
                                        'selectOtherMonths'=>true,// Select Other month in jquery
                                        'dateFormat' => 'yy-mm-dd',
                                        'changeMonth'=>true,
                                        'changeYear'=>true,
                                        'yearRange'=>'100:+0',
                                       // 'minDate' => '1900-01-01',      // minimum date
                                        //'maxDate' => '2099-12-31',      // maximum date
                                        'ButtonText'=>'please select the date',
                                        'ButtonImage'=>Yii::app()->request->basePath."/images/calender.png",
                                        'ButtonImageOnly'=>true,
                                  ),
                                    'htmlOptions'=>array(
                                        'style'=>'height:25px;',
                                    ),
                                ));
        
        ?>
        <?php echo CHtml::error($model,'dob'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_birth')); ?>:</b>
	<?php echo CHtml::encode($data->place_birth); ?><?
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nationality')); ?>:</b>
	<?php echo CHtml::encode($data->nationality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo')); ?>:</b>
	<?php echo CHtml::encode($data->photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('house_tel')); ?>:</b>
	<?php echo CHtml::encode($data->house_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('office_tel')); ?>:</b>
	<?php echo CHtml::encode($data->office_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex_id')); ?>:</b>
	<?php echo CHtml::encode($data->sex_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_status_id')); ?>:</b>
	<?php echo CHtml::encode($data->marital_status_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erb_id')); ?>:</b>
	<?php echo CHtml::encode($data->erb_id); ?>
	<br />



</div>