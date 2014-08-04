<?php
/* @var $this RecomendationController */
/* @var $data Recomendation */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referee_name')); ?>:</b>
	<?php echo CHtml::encode($data->referee_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referee_email')); ?>:</b>
	<?php echo CHtml::encode($data->referee_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personinfo_ref_no')); ?>:</b>
	<?php echo CHtml::encode($data->personinfo_ref_no); ?>
	<br />


</div>