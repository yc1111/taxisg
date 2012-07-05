<?php
$this->breadcrumbs=array(
	'Commonroutes'=>array('index'),
	$model->cid=>array('view','id'=>$model->cid),
	'Update',
);

$this->menu=array(
	array('label'=>'List COMMONROUTE', 'url'=>array('index')),
	array('label'=>'Create COMMONROUTE', 'url'=>array('create')),
	array('label'=>'View COMMONROUTE', 'url'=>array('view', 'id'=>$model->cid)),
	array('label'=>'Manage COMMONROUTE', 'url'=>array('admin')),
);
?>

<h1>Update COMMONROUTE <?php echo $model->cid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>