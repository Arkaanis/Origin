<?php
/* @var $this ProiectController */
/* @var $model Proiect */

$this->breadcrumbs=array(
	'Proiecte'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Proiecte', 'url'=>array('index')),
	array('label'=>'Proiect Nou', 'url'=>array('create')),
	array('label'=>'Vezi Proiect', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Proiect', 'url'=>array('admin')),
);
?>

<h1>Update Proiect <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>