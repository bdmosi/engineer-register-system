<?php
/* @var $this RecomendationController */
/* @var $model Recomendation */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'recomendation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'referee_name',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'referee_email',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'address',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->hiddenField($model,'personinfo_ref_no',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_MINI,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->