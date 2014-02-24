<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>

<p></p>

<?php $this->endWidget(); ?>

<p>Dupa ce va logati puteti efectua urmatoarele actiuni:</p>

<ul>
    <li>Listare, creare, modificare si stergere de utilizatori ai prezentului control pannel</li>
    <li>Listare, creare, modificare si stergere de proiecte</li>
    <li>Vizualizare, creare, modificare si stergere de poze afiliate proiectelor</li>
</ul>

<p></p>
