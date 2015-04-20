<?php
/* @var $this BookingController */
/* @var $model Booking */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'book_id'); ?>
		<?php echo $form->textField($model,'book_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tour_id'); ?>
		<?php echo $form->textField($model,'tour_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'book_date'); ?>
		<?php echo $form->textField($model,'book_date',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'book_numpeople'); ?>
		<?php echo $form->textField($model,'book_numpeople',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cus_id'); ?>
		<?php echo $form->textField($model,'cus_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'book_tel'); ?>
		<?php echo $form->textField($model,'book_tel',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->