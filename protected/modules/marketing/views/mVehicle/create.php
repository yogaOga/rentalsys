<?php
/* @var $this MVehicleController */
/* @var $model MVehicle */

$this->breadcrumbs=array(
	'Mvehicles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MVehicle', 'url'=>array('index')),
	array('label'=>'Manage MVehicle', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create MVehicle</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>