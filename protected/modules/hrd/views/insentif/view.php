<?php
/* @var $this InsentifController */
/* @var $model Insentif */

$this->breadcrumbs=array(
	'Insentifs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Insentif', 'url'=>array('index')),
	array('label'=>'Create Insentif', 'url'=>array('create')),
	array('label'=>'Update Insentif', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Insentif', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Insentif', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> View Insentifs</h1>
<div class="bloc">
    <div class="title">View Insentif #<?php echo $model->id; ?></div> 
    <div class="content">
        <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
        		'id',
		'tglinsentif',
		'nminsentif',
		'nilai',
		'catatan',
        ),
        )); ?>
    </div>
</div>
