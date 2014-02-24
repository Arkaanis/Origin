<?php
/* @var $this PozeController */
/* @var $model Poze */

$this->breadcrumbs=array(
	'Pozes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Poze', 'url'=>array('index')),
	array('label'=>'Create Poze', 'url'=>array('create')),
	array('label'=>'View Poze', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Poze', 'url'=>array('admin')),
);
?>

<h1>Update Poze <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>