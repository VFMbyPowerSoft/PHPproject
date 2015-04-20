<?php
/* @var $this PromotionController */
/* @var $model Promotion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'promotion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_id'); ?>
		<?php echo $form->textField($model,'pro_id'); ?>
		<?php echo $form->error($model,'pro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_detail'); ?>
		<?php echo $form->textField($model,'pro_detail',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'pro_detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_date'); ?>
		<?php echo $form->textField($model,'pro_date',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'pro_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_Image'); ?>
		<?php echo $form->textField($model,'pro_Image',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'pro_Image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->