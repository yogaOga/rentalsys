<?php
/* @var $this MSeksiController */
/* @var $model MSeksi */

$this->breadcrumbs=array(
	'Mseksis'=>array('index'),
	$model->seksi_id=>array('view','id'=>$model->seksi_id),
	'Update',
);

$this->menu=array(
array('label'=>'List MSeksi', 'url'=>array('index')),
array('label'=>'Create MSeksi', 'url'=>array('create')),
array('label'=>'View MSeksi', 'url'=>array('view', 'id'=>$model->seksi_id)),
array('label'=>'Manage MSeksi', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Update Mseksis</h1>
<div class="bloc">
    <div class="title">Update MSeksi <?php echo $model->seksi_id; ?></div> 
    <div class="content">
        <?php $this->renderPartial('_formUpdate', array('model'=>$model)); ?>
    </div>
</div>