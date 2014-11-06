<?php
/* @var $this TProspectController */
/* @var $model TProspect */

$this->breadcrumbs=array(
	'Tprospects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TProspect', 'url'=>array('index')),
	array('label'=>'Create TProspect', 'url'=>array('create')),
	array('label'=>'Update TProspect', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TProspect', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TProspect', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View TProspect #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'prospect_id',
		'marketing_id',
		'company_name',
		'company_title',
		'company_address',
		'phone',
		'fax',
		'l_business_type',
		'l_ownership',
		'pic',
		'occuption',
		'email',
		'mobile_phone',
		'create_user',
		'create_at',
		'update_at',
		'update_user',
			),
		)); ?>
		</div>
	</div>
</div>
