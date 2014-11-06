<?php
/* @var $this ContractOrderController */
/* @var $model ContractOrder */

$this->breadcrumbs=array(
	'Contract Orders'=>array('index'),
	$model->id_Contract_Order,
);

$this->menu=array(
	array('label'=>'List ContractOrder', 'url'=>array('index')),
	array('label'=>'Create ContractOrder', 'url'=>array('create')),
	array('label'=>'Update ContractOrder', 'url'=>array('update', 'id'=>$model->id_Contract_Order)),
	array('label'=>'Delete ContractOrder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Contract_Order),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContractOrder', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View ContractOrder #<?php echo $model->id_Contract_Order; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_Contract_Order',
		'MarketingID',
		'No_Penawaran',
		'Id_Customer',
		'Nama_Customer',
		'No_Telp',
		'Contact_Person',
		'Marketing_Name',
		'ID_Prospek',
		'Alamat_Prospek',
		'No_Fax',
		'No_Hp',
		'No_PO_System',
		'Rent_Period',
		'Delivery_Date',
		'Type_Contract_Order',
			),
		)); ?>
		</div>
	</div>
</div>
