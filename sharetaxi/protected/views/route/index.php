<?php
$this->breadcrumbs=array(
	'Routes',
);

$this->menu=array(
	array('label'=>'Create ROUTE', 'url'=>array('create')),
	array('label'=>'Manage ROUTE', 'url'=>array('admin')),
);
?>

<h1>Routes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
