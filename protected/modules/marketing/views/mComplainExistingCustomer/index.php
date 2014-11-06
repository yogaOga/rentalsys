<?php
/* @var $this MComplainExistingCustomerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mcomplain Existing Customers',
);

$this->menu=array(
	array('label'=>'Create MComplainExistingCustomer', 'url'=>array('create')),
	array('label'=>'Manage MComplainExistingCustomer', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mcomplain Existing Customers</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>