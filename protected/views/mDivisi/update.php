<?php
/* @var $this MDivisiController */
/* @var $model MDivisi */

$this->breadcrumbs=array(
	'Mdivisis'=>array('index'),
	$model->divisi_id=>array('view','id'=>$model->divisi_id),
	'Update',
);

$this->menu=array(
array('label'=>'List MDivisi', 'url'=>array('index')),
array('label'=>'Create MDivisi', 'url'=>array('create')),
array('label'=>'View MDivisi', 'url'=>array('view', 'id'=>$model->divisi_id)),
array('label'=>'Manage MDivisi', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Update Mdivisis</h1>
<div class="bloc">
    <div class="title">Update MDivisi <?php echo $model->divisi_id; ?></div> 
    <div class="content">
        <?php $this->renderPartial('_formUpdate', array('model'=>$model)); ?>
    </div>
</div>