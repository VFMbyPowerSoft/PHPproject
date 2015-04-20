<?php
/* @var $this BookingController */
/* @var $model Booking */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'booking-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'book_id'); ?>
		<?php echo $form->textField($model,'book_id'); ?>
		<?php echo $form->error($model,'book_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tour_id'); ?>
		<?php echo $form->textField($model,'tour_id'); ?>
		<?php echo $form->error($model,'tour_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_date'); ?>
		<?php echo $form->textField($model,'book_date',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'book_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_numpeople'); ?>
		<?php echo $form->textField($model,'book_numpeople',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'book_numpeople'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_id'); ?>
		<?php echo $form->textField($model,'cus_id'); ?>
		<?php echo $form->error($model,'cus_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_tel'); ?>
		<?php echo $form->textField($model,'book_tel',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'book_tel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->