<?php
/* @var $this MCarRentalController */
/* @var $model MCarRental */

$this->breadcrumbs=array(
	'Mcar Rentals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MCarRental', 'url'=>array('index')),
	array('label'=>'Manage MCarRental', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create MCarRental</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>