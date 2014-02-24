<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row-fluid">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'user'); ?>
		<?php echo $form->textField($model,'user',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'pass'); ?>
		<?php echo $form->passwordField($model,'pass',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'level'); ?>
		<?php echo $form->textField($model,'level'); ?>
	</div>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->