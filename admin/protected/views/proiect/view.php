<?php
/* @var $this ProiectController */
/* @var $model Proiect */

$this->breadcrumbs=array(
	'Proiecte'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista Proiecte', 'url'=>array('index')),
	array('label'=>'Proiect Nou', 'url'=>array('create')),
	array('label'=>'Update Proiect', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Sterge Proiect', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proiect', 'url'=>array('admin')),
);
?>

<h1>Vezi Proiect #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'coperta',
                'format',
		'titlu_ro',
		'titlu_en',
		'subtitlu_ro',
		'subtitlu_en',
		'descriere_ro',
		'descriere_en',
		'categorie_ro',
		'categorie_en',
	),
)); ?>
