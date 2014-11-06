<?php
/* @var $this HPewawancaraController */
/* @var $model HPewawancara */

$this->breadcrumbs=array(
	'Hpewawancaras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HPewawancara', 'url'=>array('index')),
	array('label'=>'Create HPewawancara', 'url'=>array('create')),
	array('label'=>'Update HPewawancara', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HPewawancara', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HPewawancara', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> View Hpewawancaras</h1>
<div class="bloc">
    <div class="title">View HPewawancara #<?php echo $model->id; ?></div> 
    <div class="content">
        <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
        		'id',
		'recruitment_id',
		'kantor_id',
		'departement_id',
		'seksi_id',
		'divisi_id',
		'jabatan_id',
		'nmpewawancara',
		'catatan',
        ),
        )); ?>
    </div>
</div>
