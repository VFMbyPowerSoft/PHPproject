<?php
/* @var $this TourController */
/* @var $data Tour */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tour_id), array('view', 'id'=>$data->tour_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_detail')); ?>:</b>
	<?php echo CHtml::encode($data->tour_detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_Image')); ?>:</b>
	<?php echo CHtml::encode($data->tour_Image); ?>
	<br />


</div>