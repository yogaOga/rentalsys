<?php
/* @var $this MCarsModelsController */
/* @var $model MCarsModels */

$this->breadcrumbs=array(
	'Mcars Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MCarsModels', 'url'=>array('index')),
	array('label'=>'Manage MCarsModels', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create MCarsModels</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		
                </div>
	</div>