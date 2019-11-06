<?php
/* @var $this BuyController */
/* @var $model Buy */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'buy-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cinema_id'); ?>
		<?php echo $form->dropDownList($model, 'cinema_id', CHtml::listData(Cinema::model()->findAll(), 'id', 'name') ); ?>
		<?php echo $form->error($model,'cinema_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'room_id'); ?>
		<?php echo $form->dropDownList($model, 'room_id', CHtml::listData(Room::model()->findAll(), 'id', 'name') ); ?>
		<?php echo $form->error($model,'room_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'movie_time'); ?>
		<?php $this->widget('CMaskedTextField', array( 'mask'=>'99:99', 'model'=>$model, 'attribute'=>'movie_time' )); ?>
		<?php echo $form->error($model,'movie_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->