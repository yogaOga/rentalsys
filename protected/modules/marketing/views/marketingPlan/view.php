<?php
/* @var $this MarketingPlanController */
/* @var $model MarketingPlan */

$this->breadcrumbs=array(
	'Marketing Plans'=>array('index'),
	$model->id_marketing_plan,
);

$this->menu=array(
	array('label'=>'List MarketingPlan', 'url'=>array('index')),
	array('label'=>'Create MarketingPlan', 'url'=>array('create')),
	array('label'=>'Update MarketingPlan', 'url'=>array('update', 'id'=>$model->id_marketing_plan)),
	array('label'=>'Delete MarketingPlan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_marketing_plan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MarketingPlan', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View MarketingPlan #<?php echo $model->id_marketing_plan; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_marketing_plan',
		'Nama_Marketing',
		'Marketing_Items',
		'Start_End_Date',
		'Durasi_Pekerjaan',
		'Skala_Prioritas',
		'Estimasi_Hasil',
		'Result_Final',
		'Note_Manager',
			),
		)); ?>
		</div>
	</div>
</div>
