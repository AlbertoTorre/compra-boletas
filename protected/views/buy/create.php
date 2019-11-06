<?php
/* @var $this BuyController */
/* @var $model Buy */

$this->breadcrumbs=array(
	'Buys'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Buy', 'url'=>array('index')),
	array('label'=>'Manage Buy', 'url'=>array('admin')),
);
?>

<h1>Create Buy</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>