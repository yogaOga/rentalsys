<?php
/* @var $this MarketingPlanController */
/* @var $model MarketingPlan */

$this->breadcrumbs=array(
	'Marketing Plans'=>array('index'),
	$model->id_marketing_plan=>array('view','id'=>$model->id_marketing_plan),
	'Update',
);

$this->menu=array(
	array('label'=>'List MarketingPlan', 'url'=>array('index')),
	array('label'=>'Create MarketingPlan', 'url'=>array('create')),
	array('label'=>'View MarketingPlan', 'url'=>array('view', 'id'=>$model->id_marketing_plan)),
	array('label'=>'Manage MarketingPlan', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MarketingPlan <?php echo $model->id_marketing_plan; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>