<?php
/* @var $this PozeController */
/* @var $model Poze */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'htmlOptions' => array(
                'enctype' => 'multipart/form-data',
                ),
	'id'=>'poze-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid">
            <?php echo $form->labelEx($model, 'path');
                  echo $form->fileField($model, 'path');
                  //echo $form->error($model, 'coperta'); ?>
	</div>

	<div class="row-fluid">
                <?php echo $form->labelEx($model,'proiect_id'); ?>
		<?php $list = CHtml::listData(Proiect::model()->findAll(), 'id', 'titlu_ro'); ?>
                <?php echo $form->dropDownList($model, 'proiect_id', $list, array('empty'=>'(Selectati un proiect)')); ?>
	</div>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->