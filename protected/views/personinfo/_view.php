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
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode($data->dob); ?>
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