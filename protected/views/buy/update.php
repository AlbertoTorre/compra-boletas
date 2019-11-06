<?php
/* @var $this BuyController */
/* @var $model Buy */

$this->breadcrumbs=array(
	'Buys'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Buy', 'url'=>array('index')),
	array('label'=>'Create Buy', 'url'=>array('create')),
	array('label'=>'View Buy', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Buy', 'url'=>array('admin')),
);
?>

<h1>Update Buy <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>