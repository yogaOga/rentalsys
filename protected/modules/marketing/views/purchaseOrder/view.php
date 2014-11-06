<?php
/* @var $this PurchaseOrderController */
/* @var $model PurchaseOrder */

$this->breadcrumbs=array(
	'Purchase Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PurchaseOrder', 'url'=>array('index')),
	array('label'=>'Create PurchaseOrder', 'url'=>array('create')),
	array('label'=>'Update PurchaseOrder', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PurchaseOrder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PurchaseOrder', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View PurchaseOrder #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'marketing_id',
		'tender_no',
		'customer_name',
		'telephone',
		'contact_person',
		'marketing_name',
		'prospect_id',
		'prospect_address',
		'fax',
		'handphone',
		'po_system_no',
		'period_rent',
		'po_customer_no',
		'delivery_date',
		'vehicle_id',
		'unit_requirement',
		'accesories',
		'rate',
		'contract_period',
		'approved',
		'created_date',
		'created_user',
		'updated_user',
		'updated_date',
			),
		)); ?>
		</div>
	</div>
</div>
