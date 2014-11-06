<?php
/* @var $this MCarRentalController */
/* @var $model MCarRental */

$this->breadcrumbs=array(
	'Mcar Rentals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MCarRental', 'url'=>array('index')),
	array('label'=>'Create MCarRental', 'url'=>array('create')),
	array('label'=>'Update MCarRental', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MCarRental', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MCarRental', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View MCarRental #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'no_cmd',
		'mobil_id',
		'unit',
		'klas_driver',
		'rental_rates',
		'contract_periode',
			),
		)); ?>
		</div>
	</div>
</div>
