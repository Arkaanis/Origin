<?php
/* @var $this PozeController */
/* @var $data Poze */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('path')); ?>:</b>
	<?php echo CHtml::encode($data->path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proiect_id')); ?>:</b>
	<?php echo CHtml::encode($data->proiect_id); ?>
	<br />


</div>