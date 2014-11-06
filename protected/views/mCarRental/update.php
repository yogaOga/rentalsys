<?php
/* @var $this MCarRentalController */
/* @var $model MCarRental */

$this->breadcrumbs=array(
	'Mcar Rentals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MCarRental', 'url'=>array('index')),
	array('label'=>'Create MCarRental', 'url'=>array('create')),
	array('label'=>'View MCarRental', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MCarRental', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MCarRental <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>