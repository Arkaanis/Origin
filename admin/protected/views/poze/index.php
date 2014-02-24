<?php
/* @var $this PozeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pozes',
);

$this->menu=array(
	array('label'=>'Create Poze', 'url'=>array('create')),
	array('label'=>'Manage Poze', 'url'=>array('admin')),
);
?>

<h1>Pozes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
