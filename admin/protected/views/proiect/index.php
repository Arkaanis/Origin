<?php
/* @var $this ProiectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proiecte',
);

$this->menu=array(
	array('label'=>'Proiect Nou', 'url'=>array('create')),
	array('label'=>'Manage Proiect', 'url'=>array('admin')),
);
?>

<h1>Proiecte</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
