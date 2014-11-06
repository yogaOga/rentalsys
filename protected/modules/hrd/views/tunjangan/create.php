<?php
/* @var $this TunjanganController */
/* @var $model Tunjangan */

$this->breadcrumbs=array(
	'Tunjangans'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Tunjangan', 'url'=>array('index')),
array('label'=>'Manage Tunjangan', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Create Tunjangans</h1>

<div class="bloc">
    <div class="title">Create Tunjangan</div> 
    <div class="content">
        <?php $this->renderPartial('_formCreate', array('model'=>$model)); ?>
    </div>
</div>