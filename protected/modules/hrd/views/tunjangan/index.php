<?php
/* @var $this TunjanganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tunjangans',
);

$this->menu=array(
	array('label'=>'Create Tunjangan', 'url'=>array('create')),
	array('label'=>'Manage Tunjangan', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> List Tunjangans</h1>
<div class="bloc">
    <div class="title">Tunjangans</div> 
    <div class="content">

        <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        )); ?>
    </div>
</div>