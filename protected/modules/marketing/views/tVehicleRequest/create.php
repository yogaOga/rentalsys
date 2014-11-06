<?php
/* @var $this TVehicleRequestController */
/* @var $model TVehicleRequest */

$this->breadcrumbs=array(
	'Tvehicle Requests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TVehicleRequest', 'url'=>array('index')),
	array('label'=>'Manage TVehicleRequest', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create TVehicleRequest</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>