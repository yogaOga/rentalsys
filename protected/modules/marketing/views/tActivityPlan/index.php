<?php
/* @var $this TActivityPlanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tactivity Plans',
);

$this->menu=array(
	array('label'=>'Create TActivityPlan', 'url'=>array('create')),
	array('label'=>'Manage TActivityPlan', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Tactivity Plans</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>