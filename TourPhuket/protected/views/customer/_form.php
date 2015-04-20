<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_name'); ?>
		<?php echo $form->textField($model,'cus_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'cus_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userName'); ?>
		<?php echo $form->textField($model,'userName',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'userName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passwords'); ?>
		<?php echo $form->textField($model,'passwords',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'passwords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_Image'); ?>
		<?php echo $form->textField($model,'cus_Image',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'cus_Image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_address'); ?>
		<?php echo $form->textField($model,'cus_address',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'cus_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_email'); ?>
		<?php echo $form->textField($model,'cus_email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'cus_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_tel'); ?>
		<?php echo $form->textField($model,'cus_tel',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cus_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cus_type'); ?>
		<?php echo $form->textField($model,'cus_type',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cus_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->