<?php
/* @var $this ExperienceController */
/* @var $model Experience */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'experience-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'action'=>$this->createUrl('experience/create')

)); ?>
     <div id='resp'></div>  
    <p class="help-block">Fields with <span class="required">*</span> are required.</p>
        
        <?php $model->personinfo_ref_no = $profil_ref_no; ?>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'expertize',array('span'=>3,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'experience_years',array('span'=>3)); ?>

            <?php echo $form->textFieldControlGroup($model,'experience_country',array('span'=>3,'maxlength'=>255)); ?>

            <?php echo $form->hiddenField($model,'personinfo_ref_no',array('span'=>5)); ?>

        <div class="form-actions">
        <?php 
//                echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
//		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
//		    'size'=>TbHtml::BUTTON_SIZE_MINI,
//		)); 
        ?>
            
            <?php echo TbHtml::ajaxSubmitButton('Create',$this->createUrl('experience/create'),
                    array(
                        'type'=>'POST',
                        'success'=>"function(response,status){
                            $('#resp').html(response);
                            //location.reload();
                          }"
                       
                    ),
                    array('class'=>'btn btn-primary')) ?>
            
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->