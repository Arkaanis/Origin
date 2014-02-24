<?php
/* @var $this ProiectController */
/* @var $data Proiect */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coperta')); ?>:</b>
	<?php echo CHtml::encode($data->coperta); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('format')); ?>:</b>
	<?php echo CHtml::encode($data->format); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('titlu_ro')); ?>:</b>
	<?php echo CHtml::encode($data->titlu_ro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titlu_en')); ?>:</b>
	<?php echo CHtml::encode($data->titlu_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtitlu_ro')); ?>:</b>
	<?php echo CHtml::encode($data->subtitlu_ro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtitlu_en')); ?>:</b>
	<?php echo CHtml::encode($data->subtitlu_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descriere_ro')); ?>:</b>
	<?php echo CHtml::encode($data->descriere_ro); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('descriere_en')); ?>:</b>
	<?php echo CHtml::encode($data->descriere_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categorie_ro')); ?>:</b>
	<?php echo CHtml::encode($data->categorie_ro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categorie_en')); ?>:</b>
	<?php echo CHtml::encode($data->categorie_en); ?>
	<br />

	*/ ?>

</div>