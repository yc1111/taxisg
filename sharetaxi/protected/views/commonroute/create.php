<?php
$this->breadcrumbs=array(
	'Commonroutes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List COMMONROUTE', 'url'=>array('index')),
	array('label'=>'Manage COMMONROUTE', 'url'=>array('admin')),
);
?>

<h1>Create COMMONROUTE</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>