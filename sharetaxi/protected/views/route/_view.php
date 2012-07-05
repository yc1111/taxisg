<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rid), array('view', 'id'=>$data->rid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start')); ?>:</b>
	<?php echo CHtml::encode($data->start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end')); ?>:</b>
	<?php echo CHtml::encode($data->end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startlat')); ?>:</b>
	<?php echo CHtml::encode($data->startlat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startlng')); ?>:</b>
	<?php echo CHtml::encode($data->startlng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endlat')); ?>:</b>
	<?php echo CHtml::encode($data->endlat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endlng')); ?>:</b>
	<?php echo CHtml::encode($data->endlng); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('message')); ?>:</b>
	<?php echo CHtml::encode($data->message); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flexible')); ?>:</b>
	<?php echo CHtml::encode($data->flexible); ?>
	<br />

	*/ ?>

</div>