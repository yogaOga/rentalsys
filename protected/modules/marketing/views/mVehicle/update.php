<?php
/* @var $this MVehicleController */
/* @var $model MVehicle */

$this->breadcrumbs=array(
	'Mvehicles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MVehicle', 'url'=>array('index')),
	array('label'=>'Create MVehicle', 'url'=>array('create')),
	array('label'=>'View MVehicle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MVehicle', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MVehicle <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>