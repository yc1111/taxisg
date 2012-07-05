<?php
$this->breadcrumbs=array(
	'Commonroutes'=>array('index'),
	$model->cid,
);

$this->menu=array(
	array('label'=>'List COMMONROUTE', 'url'=>array('index')),
	array('label'=>'Create COMMONROUTE', 'url'=>array('create')),
	array('label'=>'Update COMMONROUTE', 'url'=>array('update', 'id'=>$model->cid)),
	array('label'=>'Delete COMMONROUTE', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage COMMONROUTE', 'url'=>array('admin')),
);
?>

<h1>View COMMONROUTE #<?php echo $model->cid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cid',
		'usr1',
		'usr2',
		'usr3',
		'usr4',
		'route1',
		'route2',
		'route3',
		'route4',
		'numPeople',
	),
)); ?>
