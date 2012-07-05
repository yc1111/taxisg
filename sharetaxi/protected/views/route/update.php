<?php
$this->breadcrumbs=array(
	'Routes'=>array('index'),
	$model->rid=>array('view','id'=>$model->rid),
	'Update',
);

$this->menu=array(
	array('label'=>'List ROUTE', 'url'=>array('index')),
	array('label'=>'Create ROUTE', 'url'=>array('create')),
	array('label'=>'View ROUTE', 'url'=>array('view', 'id'=>$model->rid)),
	array('label'=>'Manage ROUTE', 'url'=>array('admin')),
);
?>

<h1>Update ROUTE <?php echo $model->rid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>