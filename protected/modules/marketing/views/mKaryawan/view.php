<?php
/* @var $this MKaryawanController */
/* @var $model MKaryawan */

$this->breadcrumbs=array(
	'Mkaryawans'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MKaryawan', 'url'=>array('index')),
	array('label'=>'Create MKaryawan', 'url'=>array('create')),
	array('label'=>'Update MKaryawan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MKaryawan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MKaryawan', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View MKaryawan #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'name',
		'address',
		'phone',
		'email',
			),
		)); ?>
		</div>
	</div>
</div>
