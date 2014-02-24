<?php
/* @var $this ProiectController */
/* @var $model Proiect */
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
		<?php echo $form->label($model,'coperta'); ?>
		<?php echo $form->textArea($model,'coperta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'titlu_ro'); ?>
		<?php echo $form->textField($model,'titlu_ro',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'titlu_en'); ?>
		<?php echo $form->textField($model,'titlu_en',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'subtitlu_ro'); ?>
		<?php echo $form->textField($model,'subtitlu_ro',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'subtitlu_en'); ?>
		<?php echo $form->textField($model,'subtitlu_en',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'descriere_ro'); ?>
		<?php echo $form->textArea($model,'descriere_ro',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'descriere_en'); ?>
		<?php echo $form->textArea($model,'descriere_en',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'categorie_ro'); ?>
		<?php echo $form->textField($model,'categorie_ro',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'categorie_en'); ?>
		<?php echo $form->textField($model,'categorie_en',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->