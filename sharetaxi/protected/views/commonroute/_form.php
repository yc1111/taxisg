<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'commonroute-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cid'); ?>
		<?php echo $form->textField($model,'cid',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr1'); ?>
		<?php echo $form->textField($model,'usr1',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usr1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr2'); ?>
		<?php echo $form->textField($model,'usr2',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usr2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr3'); ?>
		<?php echo $form->textField($model,'usr3',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usr3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr4'); ?>
		<?php echo $form->textField($model,'usr4',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usr4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route1'); ?>
		<?php echo $form->textArea($model,'route1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'route1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route2'); ?>
		<?php echo $form->textArea($model,'route2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'route2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route3'); ?>
		<?php echo $form->textArea($model,'route3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'route3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route4'); ?>
		<?php echo $form->textArea($model,'route4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'route4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numPeople'); ?>
		<?php echo $form->textField($model,'numPeople'); ?>
		<?php echo $form->error($model,'numPeople'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->