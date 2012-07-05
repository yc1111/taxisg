<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'route-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rid'); ?>
		<?php echo $form->textField($model,'rid'); ?>
		<?php echo $form->error($model,'rid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start'); ?>
		<?php echo $form->textField($model,'start',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end'); ?>
		<?php echo $form->textField($model,'end',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startlat'); ?>
		<?php echo $form->textField($model,'startlat'); ?>
		<?php echo $form->error($model,'startlat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startlng'); ?>
		<?php echo $form->textField($model,'startlng'); ?>
		<?php echo $form->error($model,'startlng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endlat'); ?>
		<?php echo $form->textField($model,'endlat'); ?>
		<?php echo $form->error($model,'endlat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endlng'); ?>
		<?php echo $form->textField($model,'endlng'); ?>
		<?php echo $form->error($model,'endlng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time'); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'message'); ?>
		<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flexible'); ?>
		<?php echo $form->textField($model,'flexible'); ?>
		<?php echo $form->error($model,'flexible'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->