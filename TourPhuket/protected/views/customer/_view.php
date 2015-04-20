<?php
/* @var $this CustomerController */
/* @var $data Customer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cus_id), array('view', 'id'=>$data->cus_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_name')); ?>:</b>
	<?php echo CHtml::encode($data->cus_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userName')); ?>:</b>
	<?php echo CHtml::encode($data->userName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passwords')); ?>:</b>
	<?php echo CHtml::encode($data->passwords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_Image')); ?>:</b>
	<?php echo CHtml::encode($data->cus_Image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_address')); ?>:</b>
	<?php echo CHtml::encode($data->cus_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_email')); ?>:</b>
	<?php echo CHtml::encode($data->cus_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_tel')); ?>:</b>
	<?php echo CHtml::encode($data->cus_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_type')); ?>:</b>
	<?php echo CHtml::encode($data->cus_type); ?>
	<br />

	*/ ?>

</div>