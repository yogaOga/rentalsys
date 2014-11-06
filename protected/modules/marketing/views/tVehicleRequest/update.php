<?php
/* @var $this TVehicleRequestController */
/* @var $model TVehicleRequest */

$this->breadcrumbs=array(
	'Tvehicle Requests'=>array('index'),
	$model->id_Vehicle_Request=>array('view','id'=>$model->id_Vehicle_Request),
	'Update',
);

$this->menu=array(
	array('label'=>'List TVehicleRequest', 'url'=>array('index')),
	array('label'=>'Create TVehicleRequest', 'url'=>array('create')),
	array('label'=>'View TVehicleRequest', 'url'=>array('view', 'id'=>$model->id_Vehicle_Request)),
	array('label'=>'Manage TVehicleRequest', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update TVehicleRequest <?php echo $model->id_Vehicle_Request; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>