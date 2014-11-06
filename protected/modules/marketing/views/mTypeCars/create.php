<?php
/* @var $this MTypeCarsController */
/* @var $model MTypeCars */

$this->breadcrumbs=array(
	'Mtype Cars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MTypeCars', 'url'=>array('index')),
	array('label'=>'Manage MTypeCars', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create MTypeCars</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>