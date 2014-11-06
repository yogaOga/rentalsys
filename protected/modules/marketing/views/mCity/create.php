<?php
/* @var $this MCityController */
/* @var $model MCity */

$this->breadcrumbs=array(
	'Mcities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MCity', 'url'=>array('index')),
	array('label'=>'Manage MCity', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create MCity</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>