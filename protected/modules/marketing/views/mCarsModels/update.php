<?php
/* @var $this MCarsModelsController */
/* @var $model MCarsModels */

$this->breadcrumbs=array(
	'Mcars Models'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MCarsModels', 'url'=>array('index')),
	array('label'=>'Create MCarsModels', 'url'=>array('create')),
	array('label'=>'View MCarsModels', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MCarsModels', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MCarsModels <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>