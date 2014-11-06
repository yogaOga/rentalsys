<?php
/* @var $this MTypeCarsController */
/* @var $model MTypeCars */

$this->breadcrumbs=array(
	'Mtype Cars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MTypeCars', 'url'=>array('index')),
	array('label'=>'Create MTypeCars', 'url'=>array('create')),
	array('label'=>'View MTypeCars', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MTypeCars', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MTypeCars <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>