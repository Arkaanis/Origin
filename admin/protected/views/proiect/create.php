<?php
/* @var $this ProiectController */
/* @var $model Proiect */

$this->breadcrumbs=array(
	'Proiecte'=>array('index'),
	'Proiect Nou',
);

$this->menu=array(
	array('label'=>'Lista Proiecte', 'url'=>array('index')),
	array('label'=>'Manage Proiect', 'url'=>array('admin')),
);
?>

<h1>Proiect Nou</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>