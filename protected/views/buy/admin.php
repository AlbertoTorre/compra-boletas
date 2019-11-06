<?php
/* @var $this BuyController */
/* @var $model Buy */

$this->breadcrumbs=array(
	'Buys'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Buy', 'url'=>array('index')),
	array('label'=>'Create Buy', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#buy-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Buys</h1>

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
	'id'=>'buy-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'cinema_id',
			'value'=>'$data->cinema->name',
			'filter'=>CHtml::activeDropDownList( $model, 'cinema_id', CHtml::listData( Cinema::model()->findAll(), 'id', 'name' ), array('empty'=>'Todos') ),
		),
		array(
			'name'=>'room_id',
			'value'=>'$data->room->name',
			'filter'=>CHtml::activeDropDownList( $model, 'room_id', CHtml::listData( Room::model()->findAll(), 'id', 'name' ), array('empty'=>'Todas') ),
		),
		'title',
		'movie_time',
		'price',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
