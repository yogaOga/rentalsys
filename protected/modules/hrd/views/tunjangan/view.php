<?php
/* @var $this TunjanganController */
/* @var $model Tunjangan */

$this->breadcrumbs=array(
	'Tunjangans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tunjangan', 'url'=>array('index')),
	array('label'=>'Create Tunjangan', 'url'=>array('create')),
	array('label'=>'Update Tunjangan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tunjangan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tunjangan', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> View Tunjangans</h1>
<div class="bloc">
    <div class="title">View Tunjangan #<?php echo $model->id; ?></div> 
    <div class="content">
        <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
        		'id',
		'tglawal',
		'tglakhir',
		'nmtunjangan',
		'nilai',
		'catatan',
		'status',
        ),
        )); ?>
    </div>
</div>
