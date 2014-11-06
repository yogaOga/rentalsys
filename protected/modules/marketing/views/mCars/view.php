<?php
/* @var $this MCarsController */
/* @var $model MCars */

$this->breadcrumbs=array(
	'Mcars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MCars', 'url'=>array('index')),
	array('label'=>'Create MCars', 'url'=>array('create')),
	array('label'=>'Update MCars', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MCars', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MCars', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View MCars #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'vehicle_id',
		'model_id',
		'type_id',
		'color_id',
		'no_police',
		'no_chasis',
		'no_machine',
		'no_stnk',
		'fuel_id',
		'kilometer',
		'no_bpkb',
		'year_of_manufacture',
		'no_factory',
		'date_of_purchase',
		'purchase_price',
		'valid_stnk',
		'expired_insurance',
		'no_polis_insurance',
		'state_car',
		'transmission',
		'cylinder',
		'stnk_address',
		'create_user',
		'create_date',
			),
		)); ?>
		</div>
	</div>
</div>
