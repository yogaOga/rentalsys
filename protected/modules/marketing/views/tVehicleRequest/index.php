<?php
/* @var $this TVehicleRequestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tvehicle Requests',
);

$this->menu=array(
	array('label'=>'Create TVehicleRequest', 'url'=>array('create')),
	array('label'=>'Manage TVehicleRequest', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Tvehicle Requests</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>