<?php
/* @var $this PromotionController */
/* @var $data Promotion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pro_id), array('view', 'id'=>$data->pro_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_detail')); ?>:</b>
	<?php echo CHtml::encode($data->pro_detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_date')); ?>:</b>
	<?php echo CHtml::encode($data->pro_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_Image')); ?>:</b>
	<?php echo CHtml::encode($data->pro_Image); ?>
	<br />


</div>