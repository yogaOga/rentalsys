<?php
/* @var $this MComplainExistingCustomerController */
/* @var $model MComplainExistingCustomer */

$this->breadcrumbs=array(
	'Mcomplain Existing Customers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MComplainExistingCustomer', 'url'=>array('index')),
	array('label'=>'Create MComplainExistingCustomer', 'url'=>array('create')),
	array('label'=>'View MComplainExistingCustomer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MComplainExistingCustomer', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MComplainExistingCustomer <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>