<?php
/* @var $this PurchaseOrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Purchase Orders',
);

$this->menu=array(
	array('label'=>'Create PurchaseOrder', 'url'=>array('create')),
	array('label'=>'Manage PurchaseOrder', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Purchase Orders</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>