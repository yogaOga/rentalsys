<?php
/* @var $this ContractOrderController */
/* @var $model ContractOrder */

$this->breadcrumbs=array(
	'Contract Orders'=>array('index'),
	$model->id_Contract_Order=>array('view','id'=>$model->id_Contract_Order),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContractOrder', 'url'=>array('index')),
	array('label'=>'Create ContractOrder', 'url'=>array('create')),
	array('label'=>'View ContractOrder', 'url'=>array('view', 'id'=>$model->id_Contract_Order)),
	array('label'=>'Manage ContractOrder', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update ContractOrder <?php echo $model->id_Contract_Order; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>