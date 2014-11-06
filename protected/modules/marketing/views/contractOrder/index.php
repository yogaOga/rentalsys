<?php
/* @var $this ContractOrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contract Orders',
);

$this->menu=array(
	array('label'=>'Create ContractOrder', 'url'=>array('create')),
	array('label'=>'Manage ContractOrder', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Contract Orders</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>