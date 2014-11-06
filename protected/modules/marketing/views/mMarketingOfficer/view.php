<?php
/* @var $this MMarketingOfficerController */
/* @var $model MMarketingOfficer */

$this->breadcrumbs=array(
	'Mmarketing Officers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MMarketingOfficer', 'url'=>array('index')),
	array('label'=>'Create MMarketingOfficer', 'url'=>array('create')),
	array('label'=>'Update MMarketingOfficer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MMarketingOfficer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MMarketingOfficer', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View MMarketingOfficer #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'mo_id',
		'mo_name',
		'created_at',
		'created_user',
			),
		)); ?>
		</div>
	</div>
</div>
