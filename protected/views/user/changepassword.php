<div class="form">
 
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'chnage-password-form',
            'enableClientValidation' => true,
            'htmlOptions' => array('class' => 'well'),
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
     ));
?>
<?php

       if(isset($msg)){ echo $msg; }

 ?>
  <div class="row"> 
        <?php echo $form->labelEx($model,'old_password'); ?>
        <?php echo $form->passwordField($model,'old_password'); ?> 
        <?php echo $form->error($model,'old_password'); ?> </div>
 
  <div class="row"> 
             <?php echo $form->labelEx($model,'new_password'); ?> 
             <?php echo $form->passwordField($model,'new_password'); ?>
             <?php echo $form->error($model,'new_password'); ?> </div>
 
  <div class="row"> 
                 <?php echo $form->labelEx($model,'repeat_password'); ?> 
                 <?php echo $form->passwordField($model,'repeat_password'); ?>
                <?php echo $form->error($model,'repeat_password'); ?> </div>
 
  <div class="row button">
         <?php echo CHtml::submitButton('Change password'); ?>
  </div> 
      
  </div>
  <?php $this->endWidget(); ?>
</div>