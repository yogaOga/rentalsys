<?php
/* @var $this TProspectHistoryController */
/* @var $model TProspectHistory */

$this->breadcrumbs=array(
	'Tprospect Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TProspectHistory', 'url'=>array('index')),
	array('label'=>'Create TProspectHistory', 'url'=>array('create')),
	array('label'=>'Update TProspectHistory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TProspectHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TProspectHistory', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View TProspectHistory #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'history_id',
		'prospect_id',
		'status_prospect',
		'type_prospect',
		'unit_need',
		'competitor',
		'description_prospect',
		'next_plan',
		'date_prospect',
			),
		)); ?>
		</div>
	</div>
</div>
