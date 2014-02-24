<?php
/* @var $this PozeController */
/* @var $model Poze */

$this->breadcrumbs=array(
	'Pozes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Poze', 'url'=>array('index')),
	array('label'=>'Create Poze', 'url'=>array('create')),
	array('label'=>'Update Poze', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Poze', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Poze', 'url'=>array('admin')),
);
?>

<h1>View Poze #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'path',
		'proiect_id',
	),
)); ?>
