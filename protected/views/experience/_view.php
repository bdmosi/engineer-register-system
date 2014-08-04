<?php
/* @var $this ExperienceController */
/* @var $data Experience */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expertize')); ?>:</b>
	<?php echo CHtml::encode($data->expertize); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('experience_years')); ?>:</b>
	<?php echo CHtml::encode($data->experience_years); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('experience_country')); ?>:</b>
	<?php echo CHtml::encode($data->experience_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personinfo_ref_no')); ?>:</b>
	<?php echo CHtml::encode($data->personinfo_ref_no); ?>
	<br />


</div>