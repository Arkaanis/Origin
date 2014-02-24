<?php
/* @var $this PozeController */
/* @var $model Poze */

$this->breadcrumbs=array(
	'Pozes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Poze', 'url'=>array('index')),
	array('label'=>'Manage Poze', 'url'=>array('admin')),
);
?>

<h1>Create Poze</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>