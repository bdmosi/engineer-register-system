<?php
/* @var $this PersoninfoController */
/* @var $model Personinfo */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'personinfo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'surname',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'fname',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'sname',array('span'=>5,'maxlength'=>255)); ?>
            
            <?php echo CHtml::activeLabel($model,'dob'); ?>
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
                                    'ButtonImage'=>Yii::app()->basePath."/images/calender.png",
                                    'ButtonImageOnly'=>true,
                              ),
                                'htmlOptions'=>array(
                                    'style'=>'height:25px;',
                                ),
                            ));

                            ?>
                            <?php echo CHtml::error($model,'dob'); ?>


            <?php echo $form->textFieldControlGroup($model,'place_birth',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'nationality',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->fileFieldControlGroup($model,'photo',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'house_tel',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'office_tel',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'mobile',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->dropDownListControlGroup($model,'sex_id',  Sex::getSexOptions(),array('empty' => '--Select--')); ?>
    
            <?php echo $form->dropDownListControlGroup($model,'marital_status_id', MaritalStatus::getMaritalStatus(),array('empty' => '--Select--')) ; ?>
    
            <?php echo $form->dropDownListControlGroup($model,'erb_id', Erb::getErbOptions(), array('empty' => '--Select--'));?>

           <?php //echo $form->dropDownListControlGroup($model,'academic_type_id', AcademicType::getAcademicOptions(),array('empty' => '--Select--')); ?>

    
        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?> 

</div><!-- form -->