<?php
/* @var $this HPewawancaraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hpewawancaras',
);

$this->menu=array(
	array('label'=>'Create HPewawancara', 'url'=>array('create')),
	array('label'=>'Manage HPewawancara', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> List Hpewawancaras</h1>
<div class="bloc">
    <div class="title">Hpewawancaras</div> 
    <div class="content">

        <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        )); ?>
    </div>
</div>