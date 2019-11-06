<?php
/* @var $this BuyController */
/* @var $model Buy */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cinema_id'); ?>
		<?php echo $form->dropDownList($model, 'cinema_id', CHtml::listData(Cinema::model()->findAll(), 'id', 'name') ); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'room_id'); ?>
		<?php echo $form->dropDownList($model, 'room_id', CHtml::listData(Room::model()->findAll(), 'id', 'name') ); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'movie_time'); ?>
		<?php echo $form->textField($model,'movie_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->