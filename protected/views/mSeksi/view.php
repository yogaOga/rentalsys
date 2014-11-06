<?php
/* @var $this MSeksiController */
/* @var $model MSeksi */

$this->breadcrumbs=array(
	'Mseksis'=>array('index'),
	$model->seksi_id,
);

$this->menu=array(
	array('label'=>'List MSeksi', 'url'=>array('index')),
	array('label'=>'Create MSeksi', 'url'=>array('create')),
	array('label'=>'Update MSeksi', 'url'=>array('update', 'id'=>$model->seksi_id)),
	array('label'=>'Delete MSeksi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->seksi_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MSeksi', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> View Mseksis</h1>
<div class="bloc">
    <div class="title">View MSeksi #<?php echo $model->seksi_id; ?></div> 
    <div class="content">
        <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
        		'seksi_id',
		'seksi_kode',
		'seksi_name',
        ),
        )); ?>
    </div>
</div>
