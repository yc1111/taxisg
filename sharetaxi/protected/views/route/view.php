<?php
$this->breadcrumbs=array(
	'Routes'=>array('index'),
	$model->rid,
);

$this->menu=array(
	array('label'=>'List ROUTE', 'url'=>array('index')),
	array('label'=>'Create ROUTE', 'url'=>array('create')),
	array('label'=>'Update ROUTE', 'url'=>array('update', 'id'=>$model->rid)),
	array('label'=>'Delete ROUTE', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ROUTE', 'url'=>array('admin')),
);
?>

<h1>View ROUTE #<?php echo $model->rid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rid',
		'start',
		'end',
		'startlat',
		'startlng',
		'endlat',
		'endlng',
		'time',
		'message',
		'flexible',
	),
)); ?>
