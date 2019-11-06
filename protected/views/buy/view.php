<?php
/* @var $this BuyController */
/* @var $model Buy */

$this->breadcrumbs=array(
	'Buys'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Buy', 'url'=>array('index')),
	array('label'=>'Create Buy', 'url'=>array('create')),
	array('label'=>'Update Buy', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Buy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Buy', 'url'=>array('admin')),
);
?>

<h1>View Buy #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cinema_id',
		'room_id',
		'title',
		'movie_time',
		'price',
	),
)); ?>
