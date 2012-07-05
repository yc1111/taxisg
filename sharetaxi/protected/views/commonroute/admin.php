<?php
$this->breadcrumbs=array(
	'Commonroutes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List COMMONROUTE', 'url'=>array('index')),
	array('label'=>'Create COMMONROUTE', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('commonroute-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Commonroutes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'commonroute-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cid',
		'usr1',
		'usr2',
		'usr3',
		'usr4',
		'route1',
		/*
		'route2',
		'route3',
		'route4',
		'numPeople',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
