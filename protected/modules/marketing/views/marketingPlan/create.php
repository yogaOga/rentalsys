<?php
/* @var $this MarketingPlanController */
/* @var $model MarketingPlan */

$this->breadcrumbs=array(
	'Marketing Plans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MarketingPlan', 'url'=>array('index')),
	array('label'=>'Manage MarketingPlan', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create MarketingPlan</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>