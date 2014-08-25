<?php
/* @var $this PersonMembershipController */
/* @var $model PersonMembership */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'person-membership-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
               'action'=>$this->createUrl('personMembership/create')

)); ?>
    
    <div id="membership_response"></div>
    
    <p class="help-block">Fields with <span class="required">*</span> are required.</p>
    
        <?php $model->personinfo_ref_no = $profile_memb_ref_no; ?>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->hiddenField($model,'personinfo_ref_no',array('span'=>5)); ?>

            <?php echo $form->dropDownListControlGroup($model,'membership_id', Membership::getMembershipOptions(),array('empty' => '--Select--')); ?>

        <div class="form-actions">
        <?php 
//                echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
//		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
//		    'size'=>TbHtml::BUTTON_SIZE_MINI,
//		)); 
          ?>
            
           <?php echo TbHtml::ajaxSubmitButton('Create',$this->createUrl('personMembership/create'),
                    array(
                        'type'=>'POST',
                        'success'=>"function(response,status){
                            $('#membership_response').html(response);
                            //location.reload();
                          }"
                       
                    ),
                    array('class'=>'btn btn-primary')) ?> 
            
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->