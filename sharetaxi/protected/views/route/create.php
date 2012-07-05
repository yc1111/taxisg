<?php
$this->breadcrumbs=array(
	'Routes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ROUTE', 'url'=>array('index')),
	array('label'=>'Manage ROUTE', 'url'=>array('admin')),
);
?>

<h1>Create ROUTE</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>