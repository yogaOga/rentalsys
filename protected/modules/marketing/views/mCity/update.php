<?php
/* @var $this MCityController */
/* @var $model MCity */

$this->breadcrumbs=array(
	'Mcities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MCity', 'url'=>array('index')),
	array('label'=>'Create MCity', 'url'=>array('create')),
	array('label'=>'View MCity', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MCity', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MCity <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>