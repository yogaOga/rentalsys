<?php
/* @var $this VehicleController */
/* @var $model Vehicle */

$this->breadcrumbs=array(
	'Vehicles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vehicle', 'url'=>array('index')),
	array('label'=>'Create Vehicle', 'url'=>array('create')),
	array('label'=>'View Vehicle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Vehicle', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update Vehicle <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>