<?php
/* @var $this MDriversController */
/* @var $model MDrivers */

$this->breadcrumbs=array(
	'Mdrivers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MDrivers', 'url'=>array('index')),
	array('label'=>'Create MDrivers', 'url'=>array('create')),
	array('label'=>'View MDrivers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MDrivers', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MDrivers <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>