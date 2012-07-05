<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cid), array('view', 'id'=>$data->cid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr1')); ?>:</b>
	<?php echo CHtml::encode($data->usr1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr2')); ?>:</b>
	<?php echo CHtml::encode($data->usr2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr3')); ?>:</b>
	<?php echo CHtml::encode($data->usr3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr4')); ?>:</b>
	<?php echo CHtml::encode($data->usr4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route1')); ?>:</b>
	<?php echo CHtml::encode($data->route1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route2')); ?>:</b>
	<?php echo CHtml::encode($data->route2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('route3')); ?>:</b>
	<?php echo CHtml::encode($data->route3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route4')); ?>:</b>
	<?php echo CHtml::encode($data->route4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numPeople')); ?>:</b>
	<?php echo CHtml::encode($data->numPeople); ?>
	<br />

	*/ ?>

</div>