<?php
$this->breadcrumbs=array(
	'Commonroutes',
);

$this->menu=array(
	array('label'=>'Create COMMONROUTE', 'url'=>array('create')),
	array('label'=>'Manage COMMONROUTE', 'url'=>array('admin')),
);
?>

<h1>Commonroutes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
