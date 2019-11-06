<?php
/* @var $this BuyController */
/* @var $data Buy */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cinema_id')); ?>:</b>
	<?php echo CHtml::encode($data->cinema->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('room_id')); ?>:</b>
	<?php echo CHtml::encode($data->room->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('movie_time')); ?>:</b>
	<?php echo CHtml::encode($data->movie_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />


</div>