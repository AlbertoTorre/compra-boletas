<?php
/* @var $this BuyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Buys',
);

$this->menu=array(
	array('label'=>'Create Buy', 'url'=>array('create')),
	array('label'=>'Manage Buy', 'url'=>array('admin')),
);
?>

<h1>Buys</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
