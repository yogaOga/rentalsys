<?php
/* @var $this MDriversController */
/* @var $model MDrivers */

$this->breadcrumbs=array(
	'Mdrivers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MDrivers', 'url'=>array('index')),
	array('label'=>'Manage MDrivers', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create MDrivers</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>