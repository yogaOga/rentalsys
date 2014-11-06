<?php
/* @var $this VehicleController */
/* @var $model Vehicle */

$this->breadcrumbs=array(
	'Vehicles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vehicle', 'url'=>array('index')),
	array('label'=>'Manage Vehicle', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create Vehicle</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>