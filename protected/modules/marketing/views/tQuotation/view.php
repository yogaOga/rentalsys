<?php
/* @var $this TQuotationController */
/* @var $model TQuotation */

$this->breadcrumbs=array(
	'Tquotations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TQuotation', 'url'=>array('index')),
	array('label'=>'Create TQuotation', 'url'=>array('create')),
	array('label'=>'Update TQuotation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TQuotation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TQuotation', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View TQuotation #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'marketing_id',
		'customer_id',
		'customer_name',
		'phone',
		'contact_person',
		'note',
		'name_of_employer',
		'include_driver',
		'include_ppn',
		'date',
		'address',
		'fax',
		'handphone_customer',
		'office_boss',
		'hanphone',
		'email',
		'create_user',
		'create_date',
			),
		)); ?>
		</div>
	</div>
</div>
