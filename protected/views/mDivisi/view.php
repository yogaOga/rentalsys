<?php
/* @var $this MDivisiController */
/* @var $model MDivisi */

$this->breadcrumbs=array(
	'Mdivisis'=>array('index'),
	$model->divisi_id,
);

$this->menu=array(
	array('label'=>'List MDivisi', 'url'=>array('index')),
	array('label'=>'Create MDivisi', 'url'=>array('create')),
	array('label'=>'Update MDivisi', 'url'=>array('update', 'id'=>$model->divisi_id)),
	array('label'=>'Delete MDivisi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->divisi_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MDivisi', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> View Mdivisis</h1>
<div class="bloc">
    <div class="title">View MDivisi #<?php echo $model->divisi_id; ?></div> 
    <div class="content">
        <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
        		'divisi_id',
		'divisi_kode',
		'divisi_name',
        ),
        )); ?>
    </div>
</div>
