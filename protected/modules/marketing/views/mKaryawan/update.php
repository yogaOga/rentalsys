<?php
/* @var $this MKaryawanController */
/* @var $model MKaryawan */

$this->breadcrumbs=array(
	'Mkaryawans'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MKaryawan', 'url'=>array('index')),
	array('label'=>'Create MKaryawan', 'url'=>array('create')),
	array('label'=>'View MKaryawan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MKaryawan', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MKaryawan <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>