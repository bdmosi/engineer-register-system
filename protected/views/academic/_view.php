<?php
/* @var $this AcademicController */
/* @var $data Academic */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('academictype_id')); ?>:</b>
	<?php echo CHtml::encode($data->academictype_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('university_name')); ?>:</b>
	<?php echo CHtml::encode($data->university_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personinfo_ref_no')); ?>:</b>
	<?php echo CHtml::encode($data->personinfo_ref_no); ?>
	<br />

	</div>