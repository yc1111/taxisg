<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rid'); ?>
		<?php echo $form->textField($model,'rid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start'); ?>
		<?php echo $form->textField($model,'start',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end'); ?>
		<?php echo $form->textField($model,'end',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startlat'); ?>
		<?php echo $form->textField($model,'startlat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startlng'); ?>
		<?php echo $form->textField($model,'startlng'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endlat'); ?>
		<?php echo $form->textField($model,'endlat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endlng'); ?>
		<?php echo $form->textField($model,'endlng'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time'); ?>
		<?php echo $form->textField($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'message'); ?>
		<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flexible'); ?>
		<?php echo $form->textField($model,'flexible'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->