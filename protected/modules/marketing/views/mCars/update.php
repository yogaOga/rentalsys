<?php
/* @var $this MCarsController */
/* @var $model MCars */

$this->breadcrumbs=array(
	'Mcars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MCars', 'url'=>array('index')),
	array('label'=>'Create MCars', 'url'=>array('create')),
	array('label'=>'View MCars', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MCars', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MCars <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>