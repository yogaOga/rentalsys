<?php
/* @var $this GajipokokController */
/* @var $model Gajipokok */

$this->breadcrumbs=array(
	'Gajipokoks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Gajipokok', 'url'=>array('index')),
	array('label'=>'Create Gajipokok', 'url'=>array('create')),
	array('label'=>'Update Gajipokok', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Gajipokok', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gajipokok', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> View Gajipokoks</h1>
<div class="bloc">
    <div class="title">View Gajipokok #<?php echo $model->id; ?></div> 
    <div class="content">
        <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
        		'id',
		'tglawal',
		'tglakhir',
		'gajipokok',
		'catatan',
        ),
        )); ?>
    </div>
</div>
