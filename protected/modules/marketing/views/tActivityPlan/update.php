<?php
/* @var $this TActivityPlanController */
/* @var $model TActivityPlan */

$this->breadcrumbs=array(
	'Tactivity Plans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TActivityPlan', 'url'=>array('index')),
	array('label'=>'Create TActivityPlan', 'url'=>array('create')),
	array('label'=>'View TActivityPlan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TActivityPlan', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update TActivityPlan <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>