<?php
/* @var $this MCarRentalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mcar Rentals',
);

$this->menu=array(
	array('label'=>'Create MCarRental', 'url'=>array('create')),
	array('label'=>'Manage MCarRental', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mcar Rentals</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>