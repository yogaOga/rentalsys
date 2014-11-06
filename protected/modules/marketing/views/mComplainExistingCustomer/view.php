<?php
/* @var $this MComplainExistingCustomerController */
/* @var $model MComplainExistingCustomer */

$this->breadcrumbs=array(
	'Mcomplain Existing Customers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MComplainExistingCustomer', 'url'=>array('index')),
	array('label'=>'Create MComplainExistingCustomer', 'url'=>array('create')),
	array('label'=>'Update MComplainExistingCustomer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MComplainExistingCustomer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MComplainExistingCustomer', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View MComplainExistingCustomer #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'periode',
		'branch',
		'marketing_officer',
		'customer',
		'complain_date',
		'complain',
		'complainer_name',
		'follow_up_date',
		'follow_up_description',
		'pic',
		'remarks',
		'created_user',
		'created_date',
		'updated_user',
		'updated_date',
			),
		)); ?>
		</div>
	</div>
</div>
