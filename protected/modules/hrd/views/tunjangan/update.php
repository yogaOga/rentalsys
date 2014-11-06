<?php
/* @var $this TunjanganController */
/* @var $model Tunjangan */

$this->breadcrumbs=array(
	'Tunjangans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>'List Tunjangan', 'url'=>array('index')),
array('label'=>'Create Tunjangan', 'url'=>array('create')),
array('label'=>'View Tunjangan', 'url'=>array('view', 'id'=>$model->id)),
array('label'=>'Manage Tunjangan', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Update Tunjangans</h1>
<div class="bloc">
    <div class="title">Update Tunjangan <?php echo $model->id; ?></div> 
    <div class="content">
        <?php $this->renderPartial('_formUpdate', array('model'=>$model)); ?>
    </div>
</div>