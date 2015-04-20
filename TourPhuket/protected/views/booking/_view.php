<?php
/* @var $this BookingController */
/* @var $data Booking */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->book_id), array('view', 'id'=>$data->book_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_id')); ?>:</b>
	<?php echo CHtml::encode($data->tour_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_date')); ?>:</b>
	<?php echo CHtml::encode($data->book_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_numpeople')); ?>:</b>
	<?php echo CHtml::encode($data->book_numpeople); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_id')); ?>:</b>
	<?php echo CHtml::encode($data->cus_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_tel')); ?>:</b>
	<?php echo CHtml::encode($data->book_tel); ?>
	<br />


</div>