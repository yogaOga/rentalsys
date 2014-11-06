<?php
/* @var $this SUserController */
/* @var $model SUser */

$this->breadcrumbs=array(
	'Susers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SUser', 'url'=>array('index')),
	array('label'=>'Create SUser', 'url'=>array('create')),
	array('label'=>'View SUser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SUser', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update SUser <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>