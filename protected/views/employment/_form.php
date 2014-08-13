<?php
/* @var $this EmploymentController */
/* @var $model Employment */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'employment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'occupation',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'employer',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'location',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'position',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->hiddenField($model,'personinfo_ref_no',array('span'=>5)); ?>
            
            <?php echo CHtml::activeLabel($model,'date_from'); ?>
            <?php $this->widget('zii.widgets.jui.CJuiDatePicker',
                          array(
                                'model'=>$model,
                                'attribute'=>'date_from',
                                //'flat'=>true,//remove to hide the datepicker
                                'options'=>array(
                                    'showAnim'=>'slide',//'fold','slideDown','fadeIn','blind','bounce','clip','drop'
                                    'showOn'=>both,
                                    'showOtherMonths'=>true,// Show Other month in jquery
                                    'selectOtherMonths'=>true,// Select Other month in jquery
                                    'dateFormat' => 'yy-mm-dd',
                                    'changeMonth'=>true,
                                    'changeYear'=>true,
                                    'yearRange'=>'100:+0',
                                    //'minDate' => '1900-01-01',      // minimum date
                                    //'maxDate' => '2099-12-31',      // maximum date
                                    'ButtonText'=>'please select the date',
                                    'ButtonImage'=>Yii::app()->basePath."/images/calender.png",
                                    'ButtonImageOnly'=>true,
                              ),
                                'htmlOptions'=>array(
                                    'style'=>'height:25px;',
                                ),
                            ));

                            ?>
                            <?php echo CHtml::error($model,'date_from'); ?>

            <?php echo $form->textFieldControlGroup($model,'date_to',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_MINI,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->