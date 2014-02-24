<?php
/* @var $this ProiectController */
/* @var $model Proiect */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'htmlOptions' => array(
                'enctype' => 'multipart/form-data',
                ),
	'id'=>'proiect-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid">
            <?php echo $form->labelEx($model, 'coperta');
                  echo $form->fileField($model, 'coperta');
                  //echo $form->error($model, 'coperta'); ?>
	</div>
        
        <div class="row-fluid">
                <?php echo $form->labelEx($model,'format'); ?>
		<?php $list = CHtml::listData(Format::model()->findAll(), 'clasa', 'nume'); ?>
                <?php echo $form->dropDownList($model, 'format', $list, array('empty'=>'(Selectati un format)')); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'titlu_ro'); ?>
		<?php echo $form->textField($model,'titlu_ro',array('size'=>60,'maxlength'=>256)); ?>
		<?php //echo $form->error($model,'titlu_ro'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'titlu_en'); ?>
		<?php echo $form->textField($model,'titlu_en',array('size'=>60,'maxlength'=>256)); ?>
		<?php //echo $form->error($model,'titlu_en'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'subtitlu_ro'); ?>
		<?php echo $form->textField($model,'subtitlu_ro',array('size'=>60,'maxlength'=>256)); ?>
		<?php //echo $form->error($model,'subtitlu_ro'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'subtitlu_en'); ?>
		<?php echo $form->textField($model,'subtitlu_en',array('size'=>60,'maxlength'=>256)); ?>
		<?php //echo $form->error($model,'subtitlu_en'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'descriere_ro'); ?>
		<?php echo $form->textArea($model,'descriere_ro',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'descriere_ro'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'descriere_en'); ?>
		<?php echo $form->textArea($model,'descriere_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'descriere_en'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'categorie_ro'); ?>
		<?php echo $form->textField($model,'categorie_ro',array('size'=>60,'maxlength'=>128)); ?>
		<?php //echo $form->error($model,'categorie_ro'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'categorie_en'); ?>
		<?php echo $form->textField($model,'categorie_en',array('size'=>60,'maxlength'=>128)); ?>
		<?php //echo $form->error($model,'categorie_en'); ?>
	</div>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->