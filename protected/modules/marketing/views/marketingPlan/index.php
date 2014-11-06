<?php
/* @var $this MarketingPlanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Marketing Plans',
);

$this->menu=array(
	array('label'=>'Create MarketingPlan', 'url'=>array('create')),
	array('label'=>'Manage MarketingPlan', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Marketing Plans</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>